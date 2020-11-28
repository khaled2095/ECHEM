<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;

class PostCategory extends Model
{
    //
    public function post_category()
    {
        return $this->belongsTo(Post::class, 'id');
    }
}
