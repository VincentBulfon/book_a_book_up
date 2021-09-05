<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Livewire\Component;

class BookList extends Component
{
    public $sortField;
    public $sortOrder;
    public $bookInfos;
    public $user;

    public function mount($pq, Request $request)
    {
        $this->sortField = $pq['sortField'];
        $this->sortOrder = $pq['sortOrder'];
        $this->bookInfos = $pq['bookInfos'];
        $this->user =  $request->user();
    }

    public function render()
    {
        $userOrder = Order::where('user_id', $this->user->id)->where('is_draft', true)->first();
        if (!$userOrder) {
            $order = new Order();
            $order->academic_year_id = 1;
            $order->is_archived = false;
            $order->user()->associate($this->user)->save();
            $userOrder = $order;
        }

        $books = Book::with(['orders'=>function ($query) use ($userOrder) {
            $query->where('id', $userOrder->id);
        }, 'sales'=>function ($query) {
            $query->where('academic_year_id', 1);
        }])->orderBy($this->sortField, $this->sortOrder)->get();

        return view('livewire.book-list', ['books' => $books, 'bookInfos'=> $this->bookInfos]);
    }
}
