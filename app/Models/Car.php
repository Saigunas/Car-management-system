<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Retrieve the owner associated with a car instance using the owner property.
    /*
     * $car = Car::find(1);
     * $owner = $car->owner;
     */
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
