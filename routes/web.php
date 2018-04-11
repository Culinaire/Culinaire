<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function () {
  Route::resource('invoices', '\App\Bistro\Invoices\Controllers\InvoiceController');
  Route::resource('invoice-items', '\App\Bistro\Invoices\Controllers\InvoiceItemController');

  Route::resource('merchants', '\App\Bistro\Merchants\Controllers\MerchantController');
  Route::resource('products', '\App\Bistro\Products\Controllers\ProductController');
});


Route::get('/home', 'HomeController@index')->name('home');
