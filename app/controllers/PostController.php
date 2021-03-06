<?php

class PostController extends BaseController {

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

	public function getShow($slug)
	{
		// echo $slug;
		$post = Post::where('slug', '=', $slug)->firstOrFail();
		return View::make('posts.show')->with('post', $post);
	}

	// public function index()
	// {
	// 	$posts = Post::where('draft', '=', 0)->get();
	// 	// print_r($posts);
	// 	return View::make('home')->with('posts', $posts);
	// }

}
