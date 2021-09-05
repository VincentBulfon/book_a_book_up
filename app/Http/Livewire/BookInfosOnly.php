<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Livewire\Component;

class BookInfosOnly extends Component
{
    public $bookId;

    public function mount(Request $request)
    {
        $this->bookId = $request->id;
    }

    public function render()
    {
        $book = Book::where('id', $this->bookId)->with(['cover', 'sales' => function ($qb) {
            $qb->where('academic_year_id', 1);
        }])->first();
        return view('livewire.book-infos-only', ['book'=>$book, 'sale'=>$book->sales[0]]);
    }
}
