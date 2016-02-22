<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
	$key = array_rand(config('mirror.greetings'));
	$greeting = config('mirror.greetings')[$key];
	$myFeed = Feed::make('http://www.stuff.co.nz/rss/');
	$stuffFeed = json_encode($myFeed);

    return view('mirror', [
   		'greeting' => $greeting,
   		'stuffFeed' => $stuffFeed,
    ]);
});

$app->get('/feed', function() {
  $myFeed = Feed::make('http://www.stuff.co.nz/rss/');

  return response()->json($myFeed);
});

$app->get('/version', function() use ($app) {
	$hash = trim(`git rev-parse HEAD`); 

	return [
		'version' => $hash,
	]; 
});
