<?php

namespace  App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
		// $this->middleware('admin');
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