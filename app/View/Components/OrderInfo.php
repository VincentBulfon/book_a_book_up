<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrderInfo extends Component
{
    /**
     * books in the order
     *
     * @var mixed
     */
    public $books;
    public $user;
    public $order_status_id;
    public $total;
    public $order_id;
    public $statuses;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($order, $statuses)
    {
        $this->books = $order->books;
        $this->user = $order->user->firstname . " " . $order->user->name;
        $this->order_status_id = $order->satuts_id;
        $this->total = $order->total_price;
        $this->order_id = $order->id;
        $this->statuses = $statuses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.order-info');
    }
}
