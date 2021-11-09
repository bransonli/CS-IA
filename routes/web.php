<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
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
    return view('pages/dashboard');
});

Route::get('/subjects', function () {
    return view('pages/subjects');
});


Route::get('/topics/{subject}', 'TopicController@show');
Route::get('/replies/{topic}', 'ReplyController@show');

Route::get('/topic/create', 'TopicController@create');
Route::post('/topic', 'TopicController@store');
Route::get('/topic/{id}/delete', 'TopicController@destroy');