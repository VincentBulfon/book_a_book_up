<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookOrder;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookOrderTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('book_order')->delete();
        // BookOrderSeeder
        $orders = Order::all();
        $books = Book::all();
        foreach ($orders as $order) {
            $sBooks = $books->shuffle();
            $nbrOfBookInOrder = mt_rand(1, $books->count());
            $thisOrderBooks = $sBooks->take($nbrOfBookInOrder);
            foreach ($thisOrderBooks as $thisOrderBook) {
                BookOrder::create([
                    'order_id' => $order->id,
                    'book_id' => $thisOrderBook->id,
                    'quantity' => mt_rand(1, 10)
                ]);
            }
        }
    }
}
