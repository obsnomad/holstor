<?php

Route::group(['domain' => 'холстор.рф'], function() {
    return redirect(env('APP_URL'));
});
Route::get('/', ['as' => 'index', 'uses' => 'PublicController@index']);
Route::post('/order', ['as' => 'order', 'uses' => 'PublicController@order']);
Route::post('/franch', ['as' => 'franch', 'uses' => 'PublicController@franch']);
