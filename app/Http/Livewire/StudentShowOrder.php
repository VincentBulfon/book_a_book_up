<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Livewire\Component;

class StudentShowOrder extends Component
{
    public $user;
    public $orderId;

    public function mount(Request $request)
    {
        $this->user = $request->user();
        $this->orderId = $request->id;
    }
    public function render()
    {
        $order = Order::where('user_id', $this->user->id)->where('id', $this->orderId)->with([
            'books',
            'books.sales'=> function ($qb) {
                $qb->where('academic_year_id', 1);
            },
            'books.orders' => function ($qb) {
                $qb->where('id', $this->orderId);
            }])->first();
        return view('livewire.student-show-order', ['order'=>$order,'books'=>$order->books]);
    }
}
