<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Related_Product extends Model
{
  public function related()
  {
      return $this->belongsToMany(Product::class, 'product_id');
  }
}
