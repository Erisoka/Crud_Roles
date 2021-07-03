<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Leonidas',
                'email'          => 'leonidas@laravel.com',
                'password'       => Hash::make('Omicron151181*'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'User',
                'email'          => 'user@user.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
