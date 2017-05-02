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

Route::group(['prefix' => 'exodus/material_requisition_tool'], function() {
   Route::get('login', 'Auth\LoginController@showLoginForm')->name('mrf_login');

   // HOMEPAGE
   Route::get('/home', 'HomeController@index')->name('home');

   // PROJECT PAGE
   Route::resource('projects', 'ProjectController');

   // REQUEST PAGE
   Route::resource('requests', 'RequestController');
});
