<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    public function gift_card_purchase()
    {
        return $this->hasMany(GiftCardPurchase::class, 'user_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'user_id');
    }
    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'user_id');
    }
    public function rewards()
    {
        return $this->hasMany(RewardPoint::class, 'user_id');
    }
    public function reviews(){
        return $this->hasMany(Reviews::class, 'user_id');
    }

    public function shop()
    {
        return $this->hasOne(Shop::class, 'user_id');
    }

    public function wholesale()
    {
        return $this->hasOne(Wholesale::class, 'user_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'from_user');
    }
    public function affiliate()
    {
        return $this->hasOne(Affiliate_req::class, 'user_id');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone','is_affiliate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
