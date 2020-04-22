<?php

namespace App\Http\Controllers;

use App\Post;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string $category
     * @return Post[]|Collection
     */
    public function index(string $category)
    {
        return Post::query()
            ->where('category', $category)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Display a listing of the resource sorted by publishDate.
     *
     * @return Post[]|Collection
     */
    public function featuredPosts()
    {
        return Post::query()->orderBy('created_at', 'desc')->limit(3)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return string
     * @throws Exception
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function store(Request $request)
    {
        $isValid = Post::isValidWithData($request);

        if ($isValid) {
            return Post::create([
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'category' => $request->get('category'),
                'url' => $request->get('url'),
                'mindMapUrl' => $request->get('mindMapUrl'),
                'duration' => $request->get('duration'),
            ]);
        }
        else {
            return "Le post n'est pas valide.";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
