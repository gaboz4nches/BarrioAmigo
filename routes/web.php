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

Route::get('/events', function (){
	$fmts = App\Formation::orderBy('id', 'DESC')->get();
	$fars = App\Fair::orderBy('id', 'DESC')->get();
	return view('events')->with('fmts', $fmts)->with('fars', $fars);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/we', 'WeController@index')->name('we');

Route::resource('tidings', 'TidingController');
Route::resource('directories', 'DirectoryController');
Route::resource('contacts', 'ContactController');
Route::resource('fairs', 'FairController');
Route::resource('formations', 'FormationController');