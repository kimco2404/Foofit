<?php
/*

 * HOME
 *  */

Route::get('/', [
    'as' => 'home',
    'uses' => 'foostart\front\Controllers\SampleController@index'
]);

/*

 * NEWS
 *  */

Route::get('/tin-tuc', [
    'as' => 'tin-tuc',
    'uses' => 'foostart\front\Controllers\SampleController@news'
]);



Route::get('tin-tuc/{id}', function ($id) {
   return 'tin-tuc'.$id;
});


/*

 * STUDENT
 *  */
Route::get('/sinh-vien', [
    'as' => 'sinh-vien',
    'uses' => 'foostart\front\Controllers\SampleController@student'
]);


Route::get('sinh-vien/{id}', function ($id) {
   return 'sinh-vien '.$id;
});

/*

 * INTRO
 *  */
Route::get('/gioi-thieu', [
    'as' => 'gioi-thieu',
    'uses' => 'foostart\front\Controllers\SampleController@intro'
]);

Route::get('gioi-thieu/{id}', function ($id) {
   return 'gioi-thieu '.$id;
});

/*

 * SAFF
 *  */

Route::get('/giang-vien', [
    'as' => 'giang-vien',
    'uses' => 'foostart\front\Controllers\SampleController@saff'
]);

Route::get('giang-vien/{id}', function ($id) {
   return 'giang-vien '.$id;
});

/*

 * CONTACT
 *  */

Route::get('/lien-he', [
    'as' => 'lien-he',
    'uses' => 'foostart\front\Controllers\SampleController@contact'
]);

Route::get('lien-he/{id}', function ($id) {
   return 'lien-he '.$id;
});

/*

 * THEMATIC
 *  */


Route::get('/chuyen-de', [
    'as' => 'chuyen-de',
    'uses' => 'foostart\front\Controllers\SampleController@thematic'
]);

Route::get('chuyen-de/{id}', function ($id) {
   return 'chuyen-de '.$id;
});

/*

 * AAO
 *  */

Route::get('/dao-tao', [
    'as' => 'dao-tao',
    'uses' => 'foostart\front\Controllers\SampleController@aao'
]);

Route::get('dao-tao/{id}', function ($id) {
   return 'dao-tao '.$id;
});

/*

 * BROCHURE
 *  */

Route::get('/brochure', [
    'as' => 'brochure',
    'uses' => 'foostart\front\Controllers\SampleController@brochure'
]);


Route::get('brochure/{id}', function ($id) {
   return 'brochure '.$id;
});
