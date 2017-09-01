<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use Auth;
use DB;
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
        $user = User::find(Auth::user()->id);
        if ($user->full_name == '') 
        {
            return view('user.complete_profile');  
        }
        else
        {
          return view('user.entry');  
        }
        
    }

    // Complete account setup by updating the user
    public function complete(Request $request)
    {   
        //find logged in user
        $user = User::find(Auth::user()->id);
        // mass save all input
        if ($user->update($request->all()))
        {
            Session::flash('success','Thank you '.$request->full_name.' for completing your profile.');
        }
        else
        {
          Session::flash('error','There was an error and the user information couldnot be saved at moment. Please try again!');
        }

        return redirect('user/account');
    }

    // Show the entry form
    public function entry()
    {
        $daily_entry = Report::where('user_id', Auth::user()->id)->whereDate('created_at', DB::raw('CURDATE()'))->get();
        //return appropriate view
        if ($daily_entry->isEmpty()) 
        {
            return view('user.entry');
        }
        else
        {
            return view('user.entry_done');
        }
        
    }

    // Processes the received data
    public function postEntry(Request $request)
    {
        // mass save all input
        if (Report::create($request->all())) 
        {
            Session::flash("success","Todays task entry has been recorded. You can track your progress via Milestones tab.");
        }
        else
        {
          Session::flash("error","There was an error and the entry could not be saved at moment. Please try again!");  
        }
        return view('user.thankyou');
    }

    // Show the milestones
    public function milestones()
    {
        $milestones = Report::where('user_id', Auth::user()->id)->get();
        return view('user.milestones')->with(['milestones'=>$milestones]);
    }

    // Show the graph
    public function graph()
    {
        return view('user.graph');
    }
    
}
