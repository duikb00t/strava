<?php

	
	Route::get('strava', function() {
		return view('strava::login');
	});
	
	Route::post('strava', 'Controllers/StravaController@verifyStravaLogin');
