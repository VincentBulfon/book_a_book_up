<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Http\Request;
use Livewire\Component;

class ShowOrdersDone extends Component
{
    public $user;

    public function mount(Request $request)
    {
        $this->user = $request->user();
    }

    public function render()
    {
        $orders = Order::select('id', 'user_id', 'academic_year_id', 'created_at')->where('user_id', $this->user->id)->where('is_draft', false)->withCurrentStatus()->orderBy('created_at', 'desc')->get();

        return view('livewire.show-orders-done', ['orders' => $orders]);
    }
}
