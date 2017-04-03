<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'foostart\front\Controllers\SampleController@index'
]);
