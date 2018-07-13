<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/test', function(){
	dd('hi there');
});
// List of all arts
Route::get('/arts', function () {
    return response(\App\Art::inRandomOrder()->take(20)->get(), 200);
    //return response(['Product 1', 'Product 2', 'Product 3'],200);
});//->middleware('cors');

// List of all arts under a department
Route::get('/departments/{department}/arts', function( $department ){
	return response()->json([
		'art' => App\Art::where('department_id', $department)->first(),
		'related_arts' => \App\Art::where('department_id', $department )->get()
	]);
})->name('arts.department');

// Details of a single art
Route::get('/arts/{art}', function( \App\Art $art ){
	$department_id = \App\Art::find(1)->department_id; 
    return response()->json([
            'art' => $art,
            'related_arts' => \App\Art::where('department_id', $department_id )->orderBy('id')->get()
        ]);
})->name('arts.art');

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/