<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'header' => 'required|unique:posts|max:255',
            'subheader' => 'required|max:190',
            'body' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png',
            'published' => 'required|boolean',
        ]);

        $post = new Post;
        $post->header = $request->header;
        $post->subheader = $request->subheader;
        $post->slug = self::slugify($request->header);
        $post->content = $request->body;
        $post->image_path = $request->image->store('posts_images', 'images_local');
        $post->published = $request->published;
        $post->user()->associate(Auth::user());
        $post->save();

        return back()->with('success-new', 'Post creado con éxito.');
    }

    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
