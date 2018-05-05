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
Route::get('/arts/all', function(){
	dd(\App\Art::all());
});//->name('arts.home');
Route::get('/arts/{department}', function( $department ){
	dd(\App\Art::where('department_id', $department)->get());
})->name('arts.department');

Route::get('/arts/{department}/{art}', function( $art ){
	dd(\App\Art::find($art));
})->name('arts.art');





Route::get('/', function () {
    return view('home');
});

Route::get('/art', function () {
    return view('art');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/arts', 'ArtsController@index')->name('home');
