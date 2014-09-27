<?php

function getYears() {
	$all_posts = Post::orderBy('updated_at', 'DESC')->get();

	$years = array();

	$first_year = $all_posts[$all_posts->count() - 1]->updated_at->year;
	$last_year = $all_posts[0]->updated_at->year;

	for ($i=$last_year; $i >= $first_year ; $i--) { 
		array_push($years, $i);
	}	

	return $years;
}