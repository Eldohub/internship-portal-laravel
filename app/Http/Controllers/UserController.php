<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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

    // Complete account setup
    public function complete()
    {
        return view('user.complete_profile');
    }

    // Show the entry form
    public function entry()
    {
        return view('user.entry');
    }

    // Processes the received data
    public function postEntry(Request $request)
    {
        // mass save all input
        if (Report::create($request->all())) {
            Session::flash("success","Todays task entry successful!");
        }
        else
        {
          Session::flash("info","There was an error and the entry could not be saved at moment. Please try again!");  
        }
        return view('user.entry_done');
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
