<?php

include 'Helpers.php';

class PostController extends BaseController {

    public $restful = true;

    // Read
    public function read($id) {
        $post = Post::find($id);
        $comments = Comment::all();

        $years = getYears();

        $view = View::make('post.read');
        $view['post'] = $post;
        $view['years'] = $years;
        $view->comments = $comments;
        
        return $view;
    }

    // New
    public function get_new() {
        return View::make('post.new')
            ->with('token', csrf_token());
    }

    // Create
    public function create() {
        // Get parametters
        $request = Input::all();

        $validation = Post::validate($request);

        if ($validation->fails()) {
            return Redirect::to('/post/new')->withErrors($validation->messages());
        } else {
            // Create instance
            $post = new Post;
            $post->name = $request['name'];
            $post->text = $request['text'];
            $post->save();
            
            return Redirect::to('/post/'.strval($post->id));
        }
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
        // Get parametters
        $request = Input::all();

        $id = $request['id'];

        $validation = Post::validate($request);

        if ($validation->fails()) {
            return Redirect::to('/post/'. strval($id) .'/edit')->withErrors($validation->messages());
        } else {
            // Create instance
            $post = Post::find($id);

            $post->name = $request['name'];
            $post->text = $request['text'];

            $post->save();

            return Redirect::to('/post/'.strval($id));
        }
    }

    // Delete
    public function delete() {        
        $request = Input::all();
        Post::find($request['id'])->delete();

        return Redirect::to('/home');
    }

    // Json
    public function allPostJson() {
        $posts = Post::all();

        return $posts;
    }

    // Make Comment
    public function make_comment(){
        # code...
    }
}
