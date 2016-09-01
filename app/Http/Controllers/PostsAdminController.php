<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Http\Requests\PostRequest;

class PostsAdminController extends Controller {

    private $post;

    public function __construct(Post $post) {
        $this->middleware('auth');
        $this->post = $post;
    }
    
//    public function auth() {
//        $user = \App\User::find(1);
//        Auth::login($user);
//    }

    public function index() {
        $posts = $this->post->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        return view('admin.posts.create');
    }
    
    public function store(PostRequest $request) {
        //dd($request->all());        
        $post = $this->post->create($request->all());
        $post->tags()->sync($this->getTagsIds($request->tags));
        
        return redirect()->route('admin.posts.index');
    }
    
    public function edit($id) {
        $post = $this->post->find($id);
        
        return view('admin.posts.edit', compact('post'));
    }
    
    public function update($id, PostRequest $request) {
        //this line does not work because returns true or false
        //$post = $this->post->find($id)->update($request->all());
        $this->post->find($id)->update($request->all());
        $post = $this->post->find($id);
        $post->tags()->sync($this->getTagsIds($request->tags));
        return redirect()->route('admin.posts.index');
    }
    
    public function destroy($id) {
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index');
    }
    
    private function getTagsIds($tags) {
        //array_map removes spaces and array_filter removes empty strings
        $tagList = array_filter(array_map('trim', explode(',', $tags)));
        //dd($tags);
        $tagsIDs=[];
        foreach($tagList as $tagName){
            $tagsIDs[] = Tag::firstOrCreate(['name'=> $tagName])->id;
        }
        //dd($tagsIDs);
        return $tagsIDs;
    }

}
