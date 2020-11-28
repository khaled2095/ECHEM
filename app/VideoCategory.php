<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    //
    public function video_categories()
    {
        return $this->hasMany(VideoCategory::class, 'parent');
    }
    public function video()
    {
        return $this->belongsTo(Video::class, 'category_id');
    }
}
