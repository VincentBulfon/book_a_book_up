<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('orders')->delete();

        // OrderSeeder
        foreach (User::all() as $user) {
            $bool = rand(0, 1) == 1;
            if ($bool) {
                $is_draft = false;
            } else {
                $is_draft = rand(0, 1) == 1;
            }
            Order::create([
                'user_id' => $user->id,
                'academic_year_id' => '1',
                'is_archived' => $bool,
                'is_draft' => $is_draft,
            ]);
        }
    }
}
