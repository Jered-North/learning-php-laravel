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

Route::get('/', 'HomeController@showHome');
Route::get('/catalog', 'HomeController@showCatalog');
Route::get('/favorites', 'HomeController@showFavorites');
Route::get('/cart', 'HomeController@showCart');

// Route::get('/user', array(

// 	'before' => 'auth.basic',

// 	function()
// {
//     return View::make('create_user_form');
// }));


// Route::post('/user', function()
// {
//     $user = new User;
//     $user->username     = Input::get('username');
//     $user->password     = Hash::make(Input::get('password'));
//     $user->email        = Input::get('email');
//     $user->save();

//     return Response::make('User created! Hurray!');
// });
