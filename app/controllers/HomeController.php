<?php

class HomeController extends BaseController {

    public function index() {
        $posts = Post::all();
        
        return View::make('home')->with('posts', $posts);
    }

}
