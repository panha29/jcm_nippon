<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    function user_website(){
        return view('user_dashboard.website.website_index');
    }
}
