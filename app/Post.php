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
        'mindMapUrl',
        'duration',
    ];

    const CATEGORIES = ['Context', 'Brakes', 'AroundTheWorld'];
    public $timestamps = true;
}
