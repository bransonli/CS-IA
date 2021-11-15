Route::post('/reply', 'ReplyController@store');
Route::get('/reply/{id}/delete', 'ReplyController@destroy');
Route::get('/reply/{id}/edit', 'ReplyController@edit');
Route::get('/reply/{id}/update', 'ReplyController@update');