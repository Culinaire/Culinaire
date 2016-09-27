<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('features', function () {
    return view('front.features');
});

Route::group(['prefix'=>'admin'], function() {
  Route::get('/', function () {
    return view('admin.index');
  });
});