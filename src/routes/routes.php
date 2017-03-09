<?php

	Route::get('strava', function() {
		return view('strava::login');
	});
	
	Route::post('strava', 'app/Http/Controllers/StravaController@verifyStravaLogin');
