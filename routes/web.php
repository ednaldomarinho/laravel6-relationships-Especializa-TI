<?php

/* One to One */

Route::get('/one-to-one', 'OneToOneController@oneToOne')->name('onetoone');
Route::get('/one-to-one-inverse', 'OneToOneController@oneToOneInverse')->name('onetooneinverse');
Route::get('/one-to-one-insert', 'OneToOneController@oneToOneInsert')->name('onetooneinsert');

/* One to Many */

Route::get('/one-to-many', 'OneToManyController@oneToMany')->name('onetomany');
Route::get('/many-to-one', 'OneToManyController@manyToOne')->name('manytoone');
Route::get('/one-to-many-two', 'OneToManyController@oneToManyTwo')->name('onetomanytwo');
Route::get('/one-to-many-insert', 'OneToManyController@oneToManyInsert')->name('onetomanyinsert');
Route::get('/one-to-many-insert-two', 'OneToManyController@oneToManyInsertTwo')->name('onetomanyinserttwo');

/*Has Many Through*/
Route::get('/has-many-through', 'OneToManyController@hasManyThrough')->name('hasmanythrough');

Route::get('/', function () {
    return view('welcome');
});

/* Many to Many */

Route::get('/many-to-many', 'ManyToManyController@manyToMany')->name('manytomany');
Route::get('/many-to-many-inverse', 'ManyToManyController@manyToManyInverse')->name('manytomanyinverse');
// Route::get('/one-to-many-two', 'OneToManyController@oneToManyTwo')->name('onetomanytwo');
// Route::get('/one-to-many-insert', 'OneToManyController@oneToManyInsert')->name('onetomanyinsert');
// Route::get('/one-to-many-insert-two', 'OneToManyController@oneToManyInsertTwo')->name('onetomanyinserttwo');
