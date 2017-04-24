<?php

Route::get('/trang-chu',  [
    'as' => 'trangchu',
    'uses' =>'Front\Controllers\FrontController@index'
]);
Route::get('/chuyen-de',  [
    'as' => 'chuyende',
    'uses' =>'Front\Controllers\FrontController@chuyende'
]);
Route::get('/tuyen-sinh',  [
    'as' => 'tuyensinh',
    'uses' =>'Front\Controllers\FrontController@tuyensinh'
]);
Route::get('/dao-tao',  [
    'as' => 'daotao',
    'uses' =>'Front\Controllers\FrontController@daotao'
]);
Route::get('/giang-vien',  [
    'as' => 'giangvien',
    'uses' =>'Front\Controllers\FrontController@giangvien'
]);
Route::get('/gioi-thieu',  [
    'as' => 'gioithieu',
    'uses' =>'Front\Controllers\FrontController@gioithieu'
]);
Route::get('/lien-he',  [
    'as' => 'lienhe',
    'uses' =>'Front\Controllers\FrontController@lienhe'
]);
Route::get('/sinh-vien',  [
    'as' => 'sinhvien',
    'uses' =>'Front\Controllers\FrontController@sinhvien'
]);
Route::get('/tin-tuc',  [
    'as' => 'tintuc',
    'uses' =>'Front\Controllers\FrontController@tintuc'
]);
Route::get('/brochure',  [
    'as' => 'brochure',
    'uses' =>'Front\Controllers\FrontController@brochure'
]);
Route::get('/index',  [
    'as' => '',
    'uses' =>'Front\Controllers\FrontController@laydata'
]);


