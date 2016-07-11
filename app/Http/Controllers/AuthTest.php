<?php

namespace Sente\Http\Controllers;

use Illuminate\Http\Request;

use Sente\Http\Requests;
use Sentinel;

class AuthTest extends Controller
{
    public function index(){

        if ($user = Sentinel::check())
        {
            // User is logged in and assigned to the `$user` variable.
            return view('auth.goodlogin');
        }
        else
        {
            // User is not logged in
            return view('auth.badlogin');
        }

    }

}
