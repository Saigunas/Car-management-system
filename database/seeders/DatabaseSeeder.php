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
        Owner::factory()->count(100)->has(Car::factory()->count(rand(1,3)))->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
        ShortCode::create([
            'shortcode' => 'catlink',
            'replace' => 'https://placekitten.com/200/300'
        ]);
    }
}
