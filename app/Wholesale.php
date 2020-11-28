<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wholesale extends Model
{
    protected $fillable=['name','description'];

    public function wholeSaleOwner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function wholesaleProducts()
    {
        return $this->hasMany(Product::class, 'wholesale_id');
    }
}
