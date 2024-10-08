<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
       $post = new Post();
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->save();

       session()->flash('status', 'Post created successfully');

       return redirect()->route('posts.index');
    }
}
