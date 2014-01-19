<?php

// $user = new User;
// $user->email = 'brian.weaver@rootradius.com';
// $user->password = Hash::make('rambo190802');
// $user->firstname = 'Brian';
// $user->lastname = 'Weaver';
// $user->save();

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('password/reminder', 'RemindersController@getRemind');
Route::post('password/reminder', 'RemindersController@postRemind');
Route::get('password/reset/{token}', 'RemindersController@getReset');
Route::post('password/reset', 'RemindersController@postReset');

Route::resource('posts', 'PostsController');