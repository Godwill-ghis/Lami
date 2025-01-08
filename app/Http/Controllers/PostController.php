<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        if(!Auth::check()){
            return view('pages.home');
        }

        $query = $request?->query('search');

        if($query) {
            $posts = Post::where('title', 'like', "%{$query}%")->with('tags')->paginate(15);
            return view('pages.home', ['posts' => $posts]);
        }

        $posts = Post::with('tags')->paginate(15);
        return view('pages.home', ['posts' => $posts]);
    }

    public function taggedPosts(Request $request, Tag $tag)
    {
        $posts = $tag->posts()->with('tags')->paginate(15);

        return view('pages.home', ['posts' => $posts]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
