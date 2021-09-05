<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookValidationRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Jobs\ProcessThumbnails;
use App\Models\Author;
use App\Models\Book;
use App\Models\Sales;
use App\Models\TextualContent;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the archived resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $searchString = $request->input('searchfor');

        if (!$searchString) {
            $books = Book::select('title', 'id', 'available', 'stock')->orderBy('available', 'desc')->orderBy('title', 'asc')->get();
        } else {
            $books = Book::select('title', 'id', 'available', 'stock')->where('title', 'like', "%{$searchString}%")->orderBy('available', 'desc')->orderBy('title', 'asc')->get();
        }
        return view('teacher.book-list', ['books'=> $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('teacher.book-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateBookValidationRequest $request)
    {
        $validated = $request->validated();
        $book = new Book();
        $book->title = $validated['title'];
        $book->isbn =$validated['isbn'];
        $book->editor = $validated['edition'];
        $book->available = true;
        $book->stock = $validated['stock'];
        $book->save();
        $sale = new Sales();
        $sale->public_price = $validated['public_price'];
        $sale->student_price = $validated['student_price'];
        $sale->academic_year_id = 1;
        $sale->book()->associate($book);
        $book->sales()->save($sale);
        foreach (explode(",", $validated['authors']) as $author) {
            $sanitizedAuthor = trim($author);
            $book->authors()->create([
                'name' => $sanitizedAuthor,
            ]);
        }

        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('public/covers/originals');
            ProcessThumbnails::dispatch($book, $imagePath)->delay(now()->addSeconds(10));
        }

        $books = Book::select('title', 'id', 'available', 'stock')->orderBy('available', 'desc')->orderBy('title', 'asc')->get();
        return view('teacher.book-list', ['books'=> $books]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function show($id)
    {
        $book = Book::with(['sales'=> function ($q) {
            $q->where('academic_year_id', 1);
        },'authors','textualContent:id,text', 'cover:id,cover,book_id'])->where('id', $id)->first();
        
        return view('teacher.book-infos', ['book'=>$book, 'sale'=>$book->sales[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function edit($id)
    {
        $book = Book::select('id', 'title', 'isbn', 'editor', 'textual_content_id')->with(['sales'=> function ($q) {
            $q->where('academic_year_id', 1);
        },'authors:authors.id,name', 'textualContent:id,text', 'cover:id,cover,book_id'])->where('id', $id)->first();
       
        return view('teacher.book-edit', ['book'=>$book, 'sale'=>$book->sales[0], 'authorsCount'=>count($book->authors)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $validated = $request->validate([
           'availability'=> 'boolean',
           'stock'=>[ 'integer', 'min:0']
        ]);
        if (isset($validated['stock']) || isset($validated['availability'])) {
            $book = Book::where('id', $id)->first();
            isset($validated['stock']) && $book->stock = $validated['stock'];
            isset($validated['availability']) && $book->available = $validated['availability'];
        }
        $book->save();
        return redirect()->back();
    }

    public function updateBookInfos(UpdateBookRequest $request, $id)
    {
        $validated = $request->validated();
        $book = Book::where('id', $id)->with(['textualContent:id,text', 'cover:id,cover,book_id'])->first();
        $book->title = $validated['title'];
        $book->isbn =$validated['isbn'];
        $book->editor = $validated['edition'];
        $book->sales[0]->public_price = $validated['public_price'];
        $book->sales[0]->student_price = $validated['student_price'];
        $book->sales[0]->save();
        if ($validated['edition_note'] != null) {
            if ($book->textualContent) {
                $book->textualContent->text = $validated['edition_note'];
                $book->textualContent->save();
            } else {
                $textualContent = new TextualContent();
                $textualContent->text = $validated['edition_note'];
                $textualContent->save();
                $book->textual_content_id = $textualContent->id;
            }
            $book->save();
        } else {
            $book->textual_content_id = null;
            $book->save();
            $book->textualContent()->delete();
        }
        foreach (explode(",", $validated['authors']) as $author) {
            $sanitizedAuthor = trim($author);
            $existingAuthor = Author::where('name', ($sanitizedAuthor))->first();
            
            if ($existingAuthor) {
                $contain = $book->authors->contains('name', $sanitizedAuthor);
                if (!$contain) {
                    $book->authors()->attach($existingAuthor->id);
                }
            } else {
                $book->authors()->create([
                    'name' => $sanitizedAuthor,
                ]);
            }
        };

        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('public/covers/originals');
            ProcessThumbnails::dispatch($book, $imagePath);
        }
        return redirect()->route('showBook', ['id' => $book->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    }
}
