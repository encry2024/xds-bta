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
   return redirect()->to('/login');
});

Auth::routes();

Route::group(['prefix' => 'exodus/material_requisition_form'], function() {
   // HOMEPAGE
   Route::get('/home', 'HomeController@mrfIndex')->name('home');

   // PROJECT PAGE
   Route::resource('project', 'ProjectController');

   // REQUEST PAGE
   Route::resource('requests', 'RequestController');

   // BALANCE PAGE
   Route::resource('balances', 'BalanceController');
});

Route::group(['prefix' => 'exodus/purchase_order_form'], function() {
   // HOMEPAGE
   Route::get('/home', 'HomeController@pofIndex')->name('pof_home');
});
