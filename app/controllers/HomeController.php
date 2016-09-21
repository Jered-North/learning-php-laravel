<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		$games = Game::all();

		return View::make('home')->with('games', $games);
	}

	public function showCatalog()
	{
		$games = Game::all();

		return View::make('catalog')->with('games', $games);
	}

	public function showFavorites()
	{
		$games = Game::all();

		return View::make('favorites')->with('games', $games);
	}

	public function showCart()
	{
		$games = Game::all();

		return View::make('cart')->with('games', $games);
	}
}
