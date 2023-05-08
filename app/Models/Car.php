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
    public function scopeFilter($query, $filter)
    {
        if ($filter->reg_number!=null) {
            $query->where('reg_number', 'like', "%{$filter->reg_number}%");
        }

        if ($filter->brand!=null) {
            $query->where('brand', 'like', "%{$filter->brand}%");
        }

        if ($filter->owner_id!=null) {
            $query->whereHas('owner', function ($query) use ($filter) {
                $query->where('owner_id', $filter->owner_id);
            });
        }

        return $query;
    }
    public function photos(){
        return $this->hasMany(CarPhoto::class);
    }
}
