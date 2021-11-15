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

Route::get('/subjects', 'SubjectController@show');


Route::get('/topics/{subject}', 'TopicController@show');
Route::get('/replies/{topic_name}', 'ReplyController@show');

Route::get('/topic/create/{subject}', 'TopicController@create');
Route::post('/topic', 'TopicController@store');
Route::get('/topic/{id}/delete', 'TopicController@destroy');
Route::get('/topic/{id}/edit', 'TopicController@edit');
Route::get('/topic/{id}/update', 'TopicController@update');

Route::post('/reply/{topic_id}', 'ReplyController@store');
Route::get('/reply/{id}/delete', 'ReplyController@destroy');
Route::get('/reply/{id}/edit', 'ReplyController@edit');
Route::get('/reply/{id}/update', 'ReplyController@update');