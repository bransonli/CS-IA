<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Topic;

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


Route::post('topics', function(Request $request) {
    return Topic::create($request->all);
});

Route::delete('topics/{id}', function($id) {
    Topic::find($id)->delete();
});

