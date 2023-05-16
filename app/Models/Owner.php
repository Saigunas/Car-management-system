<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Owner extends Model
{
    use HasFactory;
    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID');
    }
}
