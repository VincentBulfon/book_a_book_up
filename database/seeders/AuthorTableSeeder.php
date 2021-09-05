<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('authors')->delete();

        // AuthorSeeder
        Author::factory()->times(20)->create();
    }
}
