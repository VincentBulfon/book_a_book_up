<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Cover;
use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Book::all() as $book) {
            Cover::create([
                'book_id' => $book->id,
            ]);
        }
    }
}
