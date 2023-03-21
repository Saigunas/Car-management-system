<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;
use App\Models\Car;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $owners = Owner::factory()->count(100)->create();

        foreach ($owners as $owner) {
            Car::factory()->count(rand(1, 3))->create([
                'owner_id' => $owner->id,
            ]);
        }
    }
}
