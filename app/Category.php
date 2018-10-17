<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;
use App\Post;

/**
 * App\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $primaryKey = "ID";
    protected $table = 'category';

    /**
     * Every Post belongs to many cetegories | this relation is via middle table
    **/
    public function posts()
    {
        return $this->belongsToMany(Post::Class, 'posts_catogory', 'category_id', 'post_id');
    }




}
