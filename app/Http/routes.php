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
	$date = \Carbon\Carbon::now()->setTimeZone('Pacific/Auckland');

    return view('mirror', [
   		'greeting' => $greeting,
   		'date' => $date,
    ]);
});

$app->get('/version', function() use ($app) {
	$hash = trim(`git rev-parse HEAD`); 

	return [
		'version' => $hash,
	]; 
});
