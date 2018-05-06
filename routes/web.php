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

// for admin dashboard
########### 
// https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers 
############


/* Home page*/

Route::get('/arts/{department}', function( $department ){
	return view('art', 
	[
		'art' => App\Art::where('department_id', $department)->first(),
		'related_arts' => \App\Art::where('department_id', $department )->get()
	]);
})->name('arts.department');

Route::get('/arts/{department}/{art}', function($department, \App\Art $art ){
    return view('art', 
    	[
    		'art' => $art,
    		'related_arts' => \App\Art::where('department_id', $art->department_id )->get()
    	]);
})->name('arts.art');

Route::get('/', function () {
    return view('home', ['arts' => \App\Art::all()]);
});

Auth::routes();

