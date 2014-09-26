<?php

class PostController extends BaseController {

    public function view($id) {
        $post = Post::find($id);
        $comments = [];

        $view = View::make('post.view');
        $view['post'] = $post;
        $view['comments'] = $comments;
        
        return $view;
    }

}
