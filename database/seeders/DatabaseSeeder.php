<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AcademicYearSeeder::class);
        $this->command->info('Academic years table Seeded!');

        $this->call(UserTableSeeder::class);
        $this->command->info('Users table seeded!');

        $this->call(TextualContentTableSeeder::class);
        $this->command->info('TextualContent table seeded!');

        $this->call(BookTableSeeder::class);
        $this->command->info('Books table seeded!');

        $this->call(SalesSeeder::class);
        $this->command->info('Sales Table Seeded!');

        $this->call(AuthorTableSeeder::class);
        $this->command->info('Author table seeded!');

        $this->call(StatusTableSeeder::class);
        $this->command->info('Status table seeded!');

        $this->call(OrderTableSeeder::class);
        $this->command->info('Orders table seeded!');

        $this->call(OrderStatusTableSeeder::class);
        $this->command->info('OrderStatus table seeded!');

        $this->call(BookOrderTableSeeder::class);
        $this->command->info('BookOrder table seeded!');

        $this->call(BookAuthorTableSeeder::class);
        $this->command->info('BookAuthor table seeded!');

        $this->call(CoverSeeder::class);
        $this->command->info('Cover talble seeded!');
    }
}
