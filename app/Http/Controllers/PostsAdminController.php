<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;

class PostsAdminController extends Controller {

    private $post;

    public function __construct(Post $post) {
        $this->post = $post;
    }

    public function index() {
        $posts = $this->post->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        return view('admin.posts.create');
    }

}
