<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'Hello Codeup';
});


Route::get('parks', function() {
	return View::make('parks');
});

Route::post('parks', function() {
	return 'Which will you see???!?!?!?!?!?!one?!?!?!?';
});

Route::get('Say-hello/{name}', function($name) {
	if ($name == 'Ben') {

		return Redirect::to('http://bing.com');

	} else {

	return "Hello $name!";
	}
});



Route::get('roll-dice/{guess}', function($guess)
{
	$randomNumber = rand(1,6);

	return View::make('roll-dice')->with('randomNumber', $randomNumber)->with('guess', $guess);
});



Route::get('resume', 'HomeController@showResume');

Route::get('submit', 'HomeController@showSubmit');

Route::get('users', 'HomeController@showUsers');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');















