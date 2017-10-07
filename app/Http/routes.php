<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PostController@index');

Route::resource('laravel', 'LaravelController', ['only' => ['index', 'show']]);
Route::resource('corephp', 'CorephpController', ['only' => ['index', 'show']]);
Route::resource('codeigniter', 'CodeigniterController', ['only' => ['index', 'show']]);
Route::resource('angularjs', 'AngularjsController', ['only' => ['index', 'show']]);
Route::resource('jquery', 'JqueryController', ['only' => ['index', 'show']]);
Route::resource('others', 'OtherController', ['only' => ['index', 'show']]);

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/allposts', 'HomeController@allposts');

Route::get('/addpost', 'HomeController@addpost');

Route::post('/addpost', 'HomeController@newpost');

Route::get('/register', function(){
	return redirect('/webchef');
});
