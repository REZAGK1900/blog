<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Menu
 *
 * @mixin \Eloquent
 */
class Menu extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'menu';
}
