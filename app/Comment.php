<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

/**
 * App\Comment
 *
 * @property-read \App\Post $post
 * @mixin \Eloquent
 */
class Comment extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'comment';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'comment_id');
    }


}
