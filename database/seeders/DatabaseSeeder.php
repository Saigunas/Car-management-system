<?php

namespace Database\Seeders;

use App\Models\ShortCode;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Owner;
use App\Models\Car;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('user'),
                'role' => 'user',
            ],
            [
                'name' => 'readUser',
                'email' => 'readUser@readUser.com',
                'password' => Hash::make('readUser'),
                'role' => 'readUser',
            ]
        ]);


        Owner::factory()->count(100)->has(Car::factory()->count(rand(1,3)))->create();
        ShortCode::create([
            'shortcode' => 'catlink',
            'replace' => 'https://placekitten.com/200/300'
        ]);
    }
}
