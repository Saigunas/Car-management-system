<?php

namespace Database\Factories;

use App\Models\Owner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    protected $model = Owner::class;

    public function definition()
    {
        $user_id = User::inRandomOrder()->first()->id;
        return [
            'name'=>fake()->firstName(),
            'surname'=>fake()->lastName(),
            'user_id' => $user_id,
        ];
    }
}
