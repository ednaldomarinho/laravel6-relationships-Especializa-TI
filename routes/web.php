<?php

/*
One to One
*/


Route::get('/one-to-one', 'OneToOneController@oneToOne');

Route::get('/', function () {
    return view('welcome');
});
