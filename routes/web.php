<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');


Route::get('/app/order/add','OrderController@add')->name('orders.add');
Route::post('/app/order/add/process','OrderController@addProcess')->name('orders.addProcess');
Route::get('/app/order/edit/{order}', 'OrderController@change')->name('orders.change');
Route::patch('/app/order/{order}', 'OrderController@upgrade')->name('orders.upgrade');
Route::get('/app/order/list','OrderController@list')->name('orders.list');
Route::get('/app/jobs', 'OrderController@jobs')->name('orders.jobs');
Route::get('/app/order/{order_id}','OrderController@details')->name('orders.details');
Route::get('/app/jobdone/{order_id}', 'OrderController@jobdone')->name('orders.jobdone');

Route::get('/app/friendshop/add', 'FriendshopController@add')->name('friendshops.add');
Route::post('/app/friendshop/add/process', 'FriendshopController@addProcess')->name('friendshops.addProcess');
Route::get('/app/friendshop/list','FriendshopController@list')->name('friendshops.list');
Route::get('/app/friendshop/{friendshop_id}','FriendshopController@details')->name('friendshops.details');

Route::get('/app/register', 'UserController@create')->name('users.register');
Route::post('/app/register/process','UserController@store')->name('users.store');
Route::get('/app/user/list','UserController@list')->name('users.list');

Route::get('/logout','HomeController@logout')->name('logout');

Route::get('/ajax/orders/getdata','OrderController@getData');
Auth::routes(['register' => false]);

