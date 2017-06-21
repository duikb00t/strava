<?php

namespace Duikb00t\Strava\Controllers;

class StravaController extends BaseController {

    /**
     * TokenController constructor.
     */
    public function __construct()
    {
        $this->middleware('strava');
    }


    /**
	 * Verify login 
	 */
	public function verifyStravaLogin() {
		return 'Verify login with oatuh stuff';
	}
}
