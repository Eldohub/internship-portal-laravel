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
    * @return void
    */
	function __construct()
	{
		// $this->middleware('admin');
	}

	/**
	* @index
	*
	* @param Request
	* @return \Illuminate\Http\Response
	*/
	public function index(Request $request)
	{
		return view('admin.dashboard');
	}

	/**
	 *
	 *
	 *
	 *
	 */
	public function example()
	{
		return view('admin.example');
	}
}