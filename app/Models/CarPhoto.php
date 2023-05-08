<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarPhoto extends Model
{
    protected $fillable = [
        'Car_ID',
        'Image',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'Car_ID');
    }
}
