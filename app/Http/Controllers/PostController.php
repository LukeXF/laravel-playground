<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    //public function show($id)
    public function show(Post $post)
    {
        //$post = Post::find($id);

        // wildcard binding is without above line ^

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // dd(request(['title', 'body']));
        // dd(request()->all());

        // $post = new Post;
        //
        // $post->title = request('title');
        // $post->body = request('body');
        //
        // $post->save();

        $this->validate(request(), [
          "title" => 'required',
          "body" => 'required'
        ]);

        // mass asign
        Post::create(request([
          'title', 'body'
        ]));

        return redirect('/');
    }
}
