<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class OwnerPolicy
{
    use HandlesAuthorization;

    public function before(User $user){
        if($user->role == 'admin'){
            return true;
        }
    }

    public function viewAny(User $user, Owner $owner)
    {
        if($user->role == 'readUser'){
            return true;
        }else{
            return $owner->user_id == $user->id;
        }
    }

    public function view(User $user, Owner $owner)
    {
        if($user->role == 'readUser'){
            return true;
        }else{
            return $owner->user_id == $user->id;
        }
    }

    public function update(User $user, Owner $owner)
    {
        return $owner->user_id == $user->id;
    }


    public function delete(User $user, Owner $owner)
    {
        return $owner->user_id == $user->id;
    }
}
