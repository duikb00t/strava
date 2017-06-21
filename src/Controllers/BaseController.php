<?php namespace Duikb00t\Strava\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

if (class_exists('Illuminate\Routing\Controller')) {

    class BaseController extends Controller
    {

        public function __construct(Request $request)
        {
            if ($request->hasSession()){
                $request->session()->reflash();
            }
        }
    }

} else {

    class BaseController
    {
        public function __construct(Request $request, LaravelDebugbar $debugbar)
        {
            if ($request->hasSession()){
                $request->session()->reflash();
            }
        }
    }
}