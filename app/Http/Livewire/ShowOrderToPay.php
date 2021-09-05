<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\TextualContent;
use Illuminate\Http\Request;
use Livewire\Component;

class ShowOrderToPay extends Component
{
    public $userId;
    public function mount(Request $request)
    {
        $this->userId = $request->user()->id;
    }

    public function render()
    {
        $order = Order::with(['books', 'books.sales'=>function ($qb) {
            $qb->where('academic_year_id', 1);
        }])->where('user_id', $this->userId, )->where('is_draft', false)->withCurrentStatus()->latest()->first();
        $account = TextualContent::where('id', 1)->first();

        return view('livewire.show-order-to-pay', ['order'=> $order, 'account'=>$account ]);
    }
}
