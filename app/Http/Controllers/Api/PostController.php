<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::paginate(10);
        // return view('api.posts',compact('posts'));
        return response()->json($posts);
    }
}
