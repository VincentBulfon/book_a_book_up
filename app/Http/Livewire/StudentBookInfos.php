<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Livewire\Component;

class StudentBookInfos extends Component
{
    public $bookId;
    public $user;

    public function mount(Request $request)
    {
        $this->bookId = $request->id;
        $this->user = $request->user();
    }
    

    public function render()
    {
        $userOrder = Order::where('user_id', $this->user->id)->where('is_draft', true)->first();

        $book = Book::with(['sales:id,student_price,public_price,book_id', 'cover:id,cover,book_id', 'textualContent:id,text', 'authors' ,'orders'=>function ($builder) use ($userOrder) {
            $builder->where('id', $userOrder->id);
        }])->select('id', 'title', 'isbn', 'editor', 'available', 'textual_content_id')->where('id', $this->bookId)->where('available', true)->first();
   
        return view('livewire.book-infos-student', ['book'=> $book, 'sale'=>$book->sales[0]]);
    }
}
