<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        $alphabet = range('A', 'Z');
        $letters = '';
        for ($i = 0; $i < 3; $i++) {
            $letters .= $alphabet[array_rand($alphabet)];
        }
        $digits = random_int(0, 9);

        $brands = ['Toyota', 'Hyundai', 'Mitsubishi'];
        $brand = $brands[array_rand($brands)];

        return [
            'reg_number' => $letters . $digits . $digits . $digits,
            'brand' => $brand,
        ];
    }
}
