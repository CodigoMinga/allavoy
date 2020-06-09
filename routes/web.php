<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::get('/app/order/add','OrderController@add')->name('orders.add');
Route::post('/app/order/add/process','OrderController@addProcess')->name('orders.addProcess');
Route::get('/app/order/list','OrderController@list')->name('orders.list');
Route::get('/app/order/{order_id}','OrderController@details')->name('orders.details');

Route::get('/logout','HomeController@logout')->name('logout');
Auth::routes();

