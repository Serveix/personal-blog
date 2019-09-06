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
    public function show(Post $post)
    {
        return view('post')->with('post', $post);
    }
}
