<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class ShowArchivedOrders extends Component
{
    public $searchString = null;

    public function mount()
    {
        $this->searchString = Request('searchfor');
    }
        
    public function render()
    {
        switch ($this->searchString) {
            case 'null':
                $orders = Order::where('is_archived', 1)
                    ->join('users', 'users.id', '=', 'user_id')
                    ->withCurrentStatus()
                    ->get();
                break;
            default:


            $orders = Order::where('is_archived', 1)
            ->where(
                function ($query) {
                    $query->orwhere('users.firstname', 'like', "%{$this ->searchString}%")
                    ->orwhere('users.name', 'like', "%{$this ->searchString}%")
                    ->orwhere('orders.id', 'like', "%{$this ->searchString}%");
                }
            )
            ->join('users', 'users.id', '=', 'user_id')
            ->withCurrentStatus()
            ->get();
                break;
        }
        
        return view('livewire.show-archived-orders', ['orders'=> $orders]);
    }
}
