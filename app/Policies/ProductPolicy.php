<?php

namespace App\Policies;

use App\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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
        return $user->hasRole(['seller', 'wholesale-seller']);
    }


    public function read(User $user, Product $product)
    {
        if(!empty($product->shop))
        {
            return $user->id == $product->shop->user_id;
        }
        else if(!empty($product->wholesaleShop))
        {
            return $user->id == $product->wholesaleShop->user_id;
        }
        else
        {
            return false;
        }

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
        return $user->hasRole(['seller', 'wholesale-seller']);
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

        if(!empty($product->shop))
        {
            return $user->id == $product->shop->user_id;
        }
        else if(!empty($product->wholesaleShop))
        {
            return $user->id == $product->wholesaleShop->user_id;
        }
        else
        {
            return false;
        }
        //return $user->id == $product->shop->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        if(!empty($product->shop))
        {
            return $user->id == $product->shop->user_id;
        }
        else if(!empty($product->wholesaleShop))
        {
            return $user->id == $product->wholesaleShop->user_id;
        }
        else
        {
            return false;
        }

        //return $user->id == $product->shop->user_id;
    }
}
