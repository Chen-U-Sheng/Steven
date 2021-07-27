<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('v1/post/view', 'App\Http\Controllers\PostController@read');

Route::post('v1/post/create', 'App\Http\Controllers\PostController@create');

Route::post('v1/post/{postId}/update', 'App\Http\Controllers\PostController@edit');

Route::post('v1/post/edit/{title?}', 'App\Http\Controllers\PostController@editTitle');

Route::put('v1/post/update', 'App\Http\Controllers\PostController@edit');

Route::patch('v1/post/update/title', 'App\Http\Controllers\PostController@editTitle');

Route::delete('v1/post/delete', function (Request $request) {
    // ...
});