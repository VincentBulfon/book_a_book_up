<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        //DB::table('users')->delete();
        $users = [
            ['name' => 'Spirlet',
                'firstname' => 'Xavier',
                'email' => 'vincent.bulfon@gmail.com',
                'is_admin' => true,
                'password' => Hash::make('root'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sébastien',
                'firstname' => 'Jean',
                'email' => 'jean.sébastien@gmail.com',
                'is_admin' => false,
                'password' => Hash::make('root'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bach',
                'firstname' => 'Johann Sebastian',
                'email' => 'js.bach@gmail.com',
                'is_admin' => false,
                'password' => Hash::make('root'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tchaïkovski',
                'firstname' => 'Piotr Illitch',
                'email' => 'pi.tchaïkovski@gmail.com',
                'is_admin' => false,
                'password' => Hash::make('root'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        // UserSeeder
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
        User::factory()->times(50)->create();
    }
}
