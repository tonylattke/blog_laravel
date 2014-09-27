<?php

include 'Helpers.php';

class HomeController extends BaseController {

    public function index() {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        
        $years = getYears();
        
        $view = View::make('home');
        $view['posts'] = $posts;
        $view['years'] = $years;
        
        return $view;
    }

    public function year($anio) {
        // Correct get year
    	$posts = Post::whereNested(function($query){
			$query->where('created_at', '>', strval(date(DATE_ATOM, mktime(0, 0, 0, 1, 1, 2014))));
			$query->where('created_at', '<', strval(date(DATE_ATOM, mktime(0, 0, 0, 12, 31, 2014))));
		})->get();

    	$years = getYears();

    	$view = View::make('home');
        $view['posts'] = $posts;
        $view['years'] = $years;
        
        return $view;
    }

}