<?php

namespace App;

use Exception;
use Illuminate\Http\Request;
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

    /**
     * Throws exceptions if the request content doesn't satisfy the requirements
     * @param Request $request
     * @return bool
     * @throws Exception
     */
    public static function isValidWithData(Request $request)
    {

        $title = $request->get('title');
        $content = $request->get('content');
        $category = $request->get('category');
        $url = $request->get('url');

        if (!$title) {
            throw new Exception("Titre obligatoire !");
        }

        if (!$content) {
            throw new Exception("Contenu obligatoire !");
        }

        if (!$category) {
            throw new Exception("La categorie est obligatoire et doit être soit 'Context', soit 'Brakes', soit 'AroundTheWorld'. ");
        }
        else if ($category !== 'Brakes' && $category !== 'Context' && $category !== 'AroundTheWorld') {
            throw new Exception("La categorie est obligatoire et doit être soit 'Context', soit 'Brakes', soit 'AroundTheWorld'. ");
        }

        if (!$url) {
            throw new Exception("URL obligatoire !");
        }

        return true;
    }
}
