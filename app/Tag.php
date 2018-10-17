<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

/**
 * App\Tag
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $post
 * @mixin \Eloquent
 */
class Tag extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'tags';

    public function post()
    {
        return $this->belongsToMany(Post::class, 'posts_tags', 'tag_id', 'post_id');
    }
}
