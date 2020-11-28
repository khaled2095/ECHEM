<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\FinanceRequest;

class FinanceRequestPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin'))
        {
            return true;
        }
        else if ($user->hasRole('super-admin'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function browse(User $user)
    {
        return $user->hasRole(['admin', 'super-admin']);
    }


    public function read(User $user)
    {
        return $user->hasRole(['admin', 'super-admin']);

        //return $user->id == $product->shop->user_id;
    }




    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        return $user->hasRole(['admin', 'super-admin']);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function edit(User $user, Product $product)
    {

        return $user->hasRole(['admin', 'super-admin']);
        //return $user->id == $product->shop->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function delete(User $user, Fi $product)
    {
        return $user->hasRole(['admin', 'super-admin']);

        //return $user->id == $product->shop->user_id;
    }
}
