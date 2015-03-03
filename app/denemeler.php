<?PHP
Route:: get('/'function()
{
	return View::make('deneme_view');
}
	);

Route::group(array('before'=>'guest'), function()
	{
		Route::get('*/user/create','UserController@getCreate');
		Route::get('*/user/login','UserController@getLogin');
	});


