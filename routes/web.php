<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


/*
* Guest Accessbile routes
*/
Route::get('/interns', 'HomeController@interns')->name('interns');


/*
* User Auth Routes
*/

/* These routes are under /user prefix */
Route::group(['prefix'=>'user'], function () {

	Route::group(['middleware' => 'auth'], function () {

		/* Main user account */
	    Route::get('/account', 'UserController@index')->name('home');
	   
	    
	});

});


