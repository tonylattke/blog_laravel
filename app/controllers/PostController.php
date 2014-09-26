<?php

class PostController extends BaseController {

    public $restful = true;

    // Read
    public function read($id) {
        $post = Post::find($id);
        $comments = Comment::all();

        $view = View::make('post.read');
        $view['post'] = $post;
        $view->comments = $comments;
        
        return $view;
    }

    // New
    public function post_new() {
        return View::make('post.new')
            ->with('token', csrf_token());
    }

    // Create
    public function create() {
        /*$validation = Post::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to('/post/new');
        } else {

        }*/
        

        $request = Input::all();
            
        $post = new Post;

        $post->name = $request['name'];
        $post->text = $request['text'];

        $post->save();

        return Redirect::to('/post/'.strval($post->id));
    }

    // Edit
    public function edit($id) {
        $post = Post::find($id);

        $view = View::make('post.edit')
            ->with('post',$post)
            ->with('token', csrf_token());
        
        return $view;
    }

    // Update
    public function update() {
        /*$validation = Post::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to('/post/new');
        } else {

        }*/
        

        $request = Input::all();

        $id = $request['id'];

        $post = Post::find($id);

        $post->name = $request['name'];
        $post->text = $request['text'];

        $post->save();

        return Redirect::to('/post/'.strval($id));
    }

    // Delete
    public function delete() {
        /*$validation = Post::validate(Input::all());

        if ($validation->fails()) {
            return Redirect::to('/post/new');
        } else {

        }*/
        
        $request = Input::all();
        Post::find($request['id'])->delete();

        return Redirect::to('/home');
    }

    // Json
    public function allPostJson() {
        $posts = Post::all();

        return $posts;
    }
}
