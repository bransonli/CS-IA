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

//Subject pages for different features
Route::get('/subjects/discussion', 'SubjectController@show_discussion_subjects');
Route::get('/subjects/note', 'SubjectController@show_note_subjects');
Route::get('/subjects/resource', 'SubjectController@show_resource_subjects');

// Dashboard
Route::get('/', 'SubjectController@show_dashboard');

//Discussions
Route::get('/subjects/{subject}/discussion', 'DiscussionController@show');
Route::get('/subjects/{subject}/discussion/create', 'DiscussionController@create');
Route::post('/subjects/{subject}/discussion/store', 'DiscussionController@store');
Route::get('/subjects/{subject}/discussion/{id}/delete', 'DiscussionController@destroy');
Route::get('/subjects/{subject}/discussion/{id}/edit', 'DiscussionController@edit');
Route::get('/subjects/{subject}/discussion/{id}/update', 'DiscussionController@update');

//Replies
Route::get('/subjects/{subject}/discussion/{id}', 'ReplyController@show');
Route::post('/subjects/{subject}/discussion/{discussion_id}/reply/store', 'ReplyController@store');
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/delete', 'ReplyController@destroy');
Route::get('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/edit', 'ReplyController@edit');
Route::post('/subjects/{subject}/discussion/{discussion_id}/reply/{id}/update', 'ReplyController@update');

//Notes
Route::get('/subjects/{subject}/note', 'NoteController@show');
Route::get('/subjects/{subject}/note/upload', 'NoteController@upload');
Route::post('/subjects/{subject}/note/store', 'NoteController@store');
Route::get('/subjects/{subject}/note/{note_id}/download', 'NoteController@download');
Route::get('/subjects/{subject}/note/{note_id}/delete', 'NoteController@delete');

//Resources
Route::get('/subjects/{subject_name}/resource', 'ResourceController@show');
Route::get('/subjects/{subject_name}/resource/create', 'ResourceController@create');
Route::post('/subjects/{subject_name}/resource/store', 'ResourceController@store');
Route::get('/subjects/{subject_name}/resource/{id}/edit', 'ResourceController@edit');
Route::get('/subjects/{subject_name}/resource/{id}/delete', 'ResourceController@destroy');
Route::post('/subjects/{subject_name}/resource/{id}/update', 'ResourceController@update');

//Search
Route::get('/search/{search_term}', 'SearchController@search');