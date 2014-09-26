<?php

class Post extends Eloquent {

	
	protected $table = 'post';

	public static $accessible = array('name', 'text');

}
