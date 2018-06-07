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
            'related_arts' => \App\Art::where('department_id', $art->department_id )->orderBy('id')->get()
        ]);
})->name('arts.art');

Route::get('/adminasd/arts/{art}/edit', function(\App\Art $art ){
    return view('edit', 
        [
            'art' => $art,
        ]);
})->name('arts.edit');

Route::post('/adminasd/arts/{art}/edit', function(Illuminate\Http\Request $request, \App\Art $art){
    //dd($request->all());
    $art->update($request->except('_token'));

})->name('arts.edit.post');

Route::get('/', function () {
    return view('home', ['arts' => \App\Art::all()]);
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

