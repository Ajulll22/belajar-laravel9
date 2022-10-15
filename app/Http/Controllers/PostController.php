<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PostController extends Controller
{

    public function index()
    {
        $data = [
            'title' => "Post",
            'posts' => Post::all()
        ];
        return view('post.main', $data);
    }

    public function show(Post $posts)
    {
        $data = [
            'title' => "Post",
            'posts' => $posts,
        ];

        return view('post.detail', $data);
    }
}
