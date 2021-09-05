<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('books')->delete();

        // BookSeeder
        Book::factory()->times(20)->create();
    }
}
