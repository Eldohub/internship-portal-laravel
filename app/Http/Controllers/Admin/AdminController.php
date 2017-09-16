<?php

namespace  App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
* @class AdminController
*/
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
	function __construct()
	{
	    if (Auth::user() && Auth::user()->hasRole('admin')){
	        return redirect()->intended('admin.dashboard');
        }
        return redirect()->route('logout');
	}

    /**
     * @index
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @internal param $Request
     */
	public function index(Request $request)
	{
		return view('admin.dashboard');
	}

	/**
	 * Get authenticated user
	 *
	 *
	 * @return
	 */
	public function auth(Request $request)
	{
		return Auth::user();
	}
}