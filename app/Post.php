<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

/**
 * App\Post
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Category[] $categories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read \App\User $users
 * @mixin \Eloquent
 */
class Post extends Model
{

    protected $primaryKey = 'ID';
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'auther', 'image', 'slug', 'category_id', 'user_id', 'comment_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'posts_category', 'post_id', 'category_id');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
