<?php

namespace App\Observers;

use TCG\Voyager\Models\Post as Post;
use Toolkito\Larasap\SendTo;

class PostObserver
{
    //
    public function created(Post $post)
    {
        # code...
        SendTo::Facebook(
            'photo',
            [
                // 'link' => 'http://' . request()->getHttpHost() . '/product' . '/' . $product->id,
                'message' => 'New post updated ' . $post->title . '@' . ' http://' . request()->getHttpHost() . '/project/posts' . '/' . $post->slug,
                'photo' => asset('storage/' . $post->image),
            ]
        );
    }
}
