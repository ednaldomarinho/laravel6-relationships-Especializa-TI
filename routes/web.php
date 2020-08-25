<?php

/* One to One */

Route::get('/one-to-one', 'OneToOneController@oneToOne')->name('onetoone');
Route::get('/one-to-one-inverse', 'OneToOneController@oneToOneInverse')->name('onetooneinverse');
Route::get('/one-to-one-insert', 'OneToOneController@oneToOneInsert')->name('onetooneinsert');

/* One to Many */

Route::get('/one-to-many', 'OneToManyController@oneToMany')->name('onetomany');
Route::get('/many-to-one', 'OneToManyController@manyToOne')->name('manytoone');
//Route::get('/one-to-many-insert', 'OneToManyController@oneToManyInsert')->name('onetomanyinsert');

Route::get('/', function () {
    return view('welcome');
});
