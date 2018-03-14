<?php

Route::get('/', ['as' => 'index', 'uses' => 'PublicController@index']);
Route::post('/', ['as' => 'request', 'uses' => 'PublicController@request']);
