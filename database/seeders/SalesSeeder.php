<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use App\Models\Book;
use App\Models\Sales;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acadYears = AcademicYear::all();
        $nbrOfAcadYears = $acadYears->count();
        foreach (Book::all() as $book) {
            $pPrice = mt_rand(1000, 5000) / 100;
            Sales::create([
                'book_id' => $book->id,
                'academic_year_id' => $acadYears->shuffle()->take($nbrOfAcadYears)->first()->id,
                'public_price' => $pPrice,
                'student_price' => round($pPrice - mt_rand(1, 5))
            ]); 
        }
    }
}
