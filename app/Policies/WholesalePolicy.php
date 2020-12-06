<?php

namespace App\Policies;

use App\User;
use App\Wholesale;
use Illuminate\Auth\Access\HandlesAuthorization;

class WholesalePolicy
{
    use HandlesAuthorization;


    public function before($user, $ability)
    {
        if ($user->hasRole(['admin', 'admin-s']))
        {
            return true;
        }
    }


    public function browse(User $user)
    {
        return $user->hasRole('wholesale-seller');
    }


    public function read(User $user, Wholesale $wholesale)
    {
        return $user->id == $wholesale->user_id;
    }





    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Wholesale  $wholesale
     * @return mixed
     */
    public function edit(User $user, Wholesale $wholesale)
    {
        return $user->id == $wholesale->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Wholesale  $wholesale
     * @return mixed
     */
    public function delete(User $user, Wholesale $wholesale)
    {
        return $user->id == $wholesale->user_id;
    }

}
