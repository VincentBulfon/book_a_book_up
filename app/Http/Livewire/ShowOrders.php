<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Http\Request;

class ShowOrders extends Component
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
                $orders = Order::where('is_archived', 0)
                ->where('is_draft', 0)
                ->join('users', 'users.id', '=', 'user_id')
                ->withCurrentStatus()
                    ->get();
                break;
            default:


            $orders = Order::withCurrentStatus()
            ->join('users', 'users.id', '=', 'user_id')
            ->orWhere(
                function ($query) {
                    $query
                    ->where('is_draft', 0)
                    ->where('is_archived', false)
                    ->where('users.firstname', 'like', "%{$this ->searchString}%");
                }
            )->orWhere(
                function ($q) {
                    $q
                    ->where('is_draft', 0)
                    ->where('is_archived', false)
                    ->where('users.name', 'like', "%{$this ->searchString}%");
                }
            )
            ->orWhere(function ($q) {
                $q
                ->where('is_draft', 0)
                ->where('is_archived', false)
                ->where('orders.id', 'like', "%{$this ->searchString}%");
            })
           ->get();
                break;
        }
        return view('livewire.show-orders', ['orders'=> $orders]);
    }
}
