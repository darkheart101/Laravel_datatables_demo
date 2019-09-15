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

Route::get('/', 'WebControllers\CarController@cars_simple_table');

Route::get('/datatables', 'WebControllers\CarController@cars_datatable')->name('datatables');

Route::get('/ajax_datatables', 'WebControllers\CarController@cars_ajax_datatable')->name('ajax_datatables');