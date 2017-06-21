<?php
	
Route::group(['namespace' => '\Duikb00t\Strava\Controllers'], function () {
    Route::get('strava', function() {
		return view('strava::login');
	});
	
	Route::post('strava', 'StravaController@verifyStravaLogin');
});