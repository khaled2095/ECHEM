<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Related_Product extends Model
{
    protected $fillable = [
        'product_id'
    ];
  public function related()
  {
      return $this->belongsToMany(Product::class, 'product_id');
  }
}
