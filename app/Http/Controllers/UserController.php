<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('user.account');
    }


    // Show the entry form
    public function entry()
    {
        return view('user.entry');
    }

    // Show the milestones
    public function milestones()
    {
        return view('user.milestones');
    }

    // Show the graph
    public function graph()
    {
        return view('user.graph');
    }
}
