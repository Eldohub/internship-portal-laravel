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

Route::get('/home', 'HomeController@index')->name('home');


/**
* @ Admin route
*/

Route::group(['prefix'=>'admin', 'namespace' => 'Admin', 'as'=>'admin.'], function(){

	// Darshboad
	Route::get('/dashboard', [
		'uses' => 'AdminController@index'
		])->name('dashboard');
});