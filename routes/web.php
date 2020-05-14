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

Route::get('customers/displaygrid', 'customerController@displaygrid')->name('customers.displaygrid');

Route::get('customers/addclient/{id}', 'customerController@additem')->name('customers.addclient');

Route::resource('customers', 'customerController');

Route::resource('vehicles', 'vehicleController');

Route::resource('rentals', 'rentalController');