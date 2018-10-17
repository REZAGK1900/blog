<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = ['filePath'];
    protected $primaryKey = 'ID';
    protected $table = 'uploads';
}
