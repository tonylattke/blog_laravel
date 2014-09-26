<?php

class Comment extends Eloquent {

	
	protected $table = 'comment';

	public static $accessible = array('post_id','name', 'text');

}
