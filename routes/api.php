<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Discussion;

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


Route::post('discussions', function(Request $request) {
    return Discussion::create($request->all);
});

Route::delete('discussions/{id}', function($id) {
    Discussion::find($id)->delete();
});

