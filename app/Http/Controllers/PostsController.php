<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PostsController extends Controller {

    public function index() {

        $posts = \App\Post::all();
        
        return view('posts.index', compact('posts'));
    }

}
