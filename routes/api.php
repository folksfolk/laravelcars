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


Route::namespace('Auth')->group(function(){
	Route::post('/register','RegisterController');
	Route::post('/login','LoginController');
	
});

Route::get('pelanggan', 'PelangganController@index');
Route::post('pelanggan', 'PelangganController@create');
Route::put('/pelanggan/{$id}', 'PelangganController@update');
Route::delete('/pelanggan/{$id}', 'PelangganController@delete');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
