<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'foostart\front\Controllers\SampleController@index'
]);


Route::get('/news', [
    'as' => 'news',
    'uses' => 'foostart\front\Controllers\SampleController@news'
]);
