<?php

class User extends Eloquent{

	protected $table = 'users';
	protected $fillable = [			
		'username',
		'password',
		'user_type'
	];

	
}
