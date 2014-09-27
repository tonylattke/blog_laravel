<?php

class Post extends Eloquent {

	// Name of table on database
	protected $table = 'post';

	public static $accessible = array('name', 'text');

	// Validation
	public static $rules = array(
		'name'=>'required|min:2',
		'text'=>'required|min:10'
	);

	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}

}
