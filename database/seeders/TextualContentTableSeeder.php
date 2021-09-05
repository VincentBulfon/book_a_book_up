<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TextualContent;

class TextualContentTableSeeder extends Seeder
{
    public function run()
    {
        TextualContent::create(['text' => 'BE12 1234 1234 1234']);
        TextualContent::factory()->times(25)->create();
    }
}
