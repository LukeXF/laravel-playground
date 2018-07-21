<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    // guarded
    // protected $gaurded = ['title', 'body'];
}
