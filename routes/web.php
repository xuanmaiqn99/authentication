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
Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/dashboard','AdminController@show_dashboard')->name('dashboard');
Route::get('/logout','AdminController@logout')->name('logout');
Route::post('/admin-dashboard','AdminController@dashboard')->name('admin_dashboard');
