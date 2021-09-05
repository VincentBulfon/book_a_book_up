<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('status')->delete();

        // StatusSeeder
        $status = [
            ['status' => 'non payée'],
            ['status' => 'payée'],
            ['status' => 'disponible'],
            ['status' => 'livrée'],
        ];
        DB::table('status')->insert($status);
    }
}
