<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Status;
use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('order_status')->delete();

        // OrderStatusSeeder
        $status = Status::all();
        $nbr = 0;
        foreach (Order::all() as $order) {
            OrderStatus::create([
                'order_id' => $order->id,
                'status_id' => $status[$nbr]->id
            ]);
            $nbr++;
            if ($nbr > count($status) - 1) {
                $nbr = 0;
            };
        }
    }
}
