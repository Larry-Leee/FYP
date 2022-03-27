<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Post;

class PostController extends Controller
{
    //index method
    public function index()
    {
        //index method
        return view('home.post', [
            'post' => Post::latest()->get(),
        ]);
    }

    //create method
    public function create()
    {
        //create a new comment
        return view('home.create');
    }

    //store
    public function store(Request $request)
    {
        //create post
        $data = request()->input();
        $post = new Post();
        $post->comment = $data['comment'];
        $post->save();

        return redirect('/admin/comments/'.$post->p_id);
    }

    //show
    public function show(Post $post)
    {
        return view('home.post', ['post'=> $post]);
    }
}
