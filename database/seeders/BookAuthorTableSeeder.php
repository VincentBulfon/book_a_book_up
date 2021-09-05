<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookAuthor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookAuthorTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('book_author')->delete();

        // BookAuthorSeeder
        //for each book we add one or more authors
        foreach (Book::all() as $book) {
            //define the number of authors we would like to insert (between 0 and 3 here)
            $nbrOfAuthors = rand(1, 3);
            //restet the table of the current book authors
            $thisBookAuthors = [];
            //for the defined number of authors
            for ($i = 1; $i < $nbrOfAuthors; $i++) {
                //we pick an random id of an author
                $randAuthorId = Author::all()->random()->id;
                if (BookAuthor::all()->isEmpty()) {
                    BookAuthor::create([
                        'book_id' => Book::all()->first()->id,
                        'author_id' => $randAuthorId
                    ]);
                }
                //foreach line bookauthor which match our actual book_id
                foreach (BookAuthor::where('book_id', '=', $book->id)->get() as $thisBA) {
                    $thisBookAuthors[] = $thisBA->author_id;
                }
                //create a new line with defined authors in relation with the books
                BookAuthor::create([
                    'book_id' => $book->id,
                    'author_id' => DB::table('authors')->whereNotIn('id', $thisBookAuthors)->get()->random()->id]);
            }
        }
    }
}
