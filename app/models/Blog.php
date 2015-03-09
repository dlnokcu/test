<?php 

class Blog extends \Eloquent{

	protected $table = 'blogs';
	protected $fillable = [
		'title',
		'author',
		'content',
		'release_date'
	];

} 