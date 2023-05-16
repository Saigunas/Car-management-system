<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Log;

class CarPolicy
{
    use HandlesAuthorization;

    public function before(User $user){
        if($user->role == 'admin'){
            return true;
        }
    }

    public function viewAny(User $user, Car $car)
    {
        if($user->role == 'readUser'){
            return true;
        }else{
            return $car->owner->user_id == $user->id;
        }
    }
    public function view(User $user, Car $car)
    {
        if($user->role == 'readUser'){
            return true;
        }else{
            return $car->owner->user_id == $user->id;
        }
    }


    public function update(User $user, Car $car)
    {
        return $car->owner->user_id == $user->id;
    }


    public function delete(User $user, Car $car)
    {
        return $car->owner->user_id == $user->id;
    }
}
