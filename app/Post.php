<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'url',
        'category',
    ];

    const CATEGORIES = ['Context', 'Brakes', 'AroundTheWorld'];
    public $timestamps = false;
}
