<?php

class Comment extends Eloquent {

	// Table name	
	protected $table = 'comment';

	public static $accessible = array('post_id','name', 'text');

	// Validation
	public static $rules = array(
		'name'=>'required|min:2',
		'text'=>'required|min:10'
	);

	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}

}
