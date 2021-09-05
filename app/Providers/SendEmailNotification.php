<?php

namespace App\Providers;

use App\Mail\OrderUpdateMail;
use App\Providers\OrderUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderUpdate  $event
     * @return void
     */
    public function handle(OrderUpdate $event)
    {
        Mail::to($event->order->user->email)->send(new OrderUpdateMail($event->order));
    }
}
