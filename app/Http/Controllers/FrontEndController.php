<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function website(){
        return view('front_end.index');
    }
}
