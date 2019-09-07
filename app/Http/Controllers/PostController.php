<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->limit(5)->get();

        return view('welcome')->with('posts', $posts);
    }
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('post')->with('post', $post);
    }
}
