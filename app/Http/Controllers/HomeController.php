<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //Returns all interns
    public function interns()
    {
        return view('interns');
    }
}
