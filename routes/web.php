<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionController;
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

//Subject pages for different features
Route::get('/subjects/discussion', 'SubjectController@show_discussion_subjects');
Route::get('/subjects/note', 'SubjectController@show_note_subjects');

//Discussions
Route::get('/subjects/{subject}/discussion', 'DiscussionController@show');
Route::get('/subjects/{subject}/discussion/create', 'DiscussionController@create');
Route::post('/subjects/{subject}/discussion/store', 'DiscussionController@store');
Route::get('/subjects/{subject}/discussion/{id}/delete', 'DiscussionController@destroy');
Route::get('/subjects/{subject}/discussion/{id}/edit', 'DiscussionController@edit');
Route::get('/subjects/{subject}/discussion/{id}/update', 'DiscussionController@update');

//Replies
Route::get('/subjects/{subject}/discussion/{id}', 'ReplyController@show');
Route::post('/subjects/{subject}/discussion/{discussion_id}/reply', 'ReplyController@store');
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/delete', 'ReplyController@destroy');
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/edit', 'ReplyController@edit');
Route::put('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/update', 'ReplyController@update');

//Notes
Route::get('/subjects/{subject}/note', 'NoteController@show');
Route::get('/subjects/{subject}/note/upload', 'NoteController@upload');
Route::post('/subjects/{subject}/note/store', 'NoteController@store');
Route::get('/subjects/{subject}/note/{note_id}/download', 'NoteController@download');
Route::get('/subjects/{subject}/note/{note_id}/delete', 'NoteController@delete');