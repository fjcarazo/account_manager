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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account/create', 'AccountController@create');
Route::get('/account/showall', 'AccountController@showall');
Route::post('/account', 'AccountController@store');
Route::get('/account/{account}', 'AccountController@edit');
Route::patch('/account/add/{account}', 'AccountController@add');
Route::patch('/account/withdraw/{account}', 'AccountController@withdraw');
Route::delete('/account/{project}', 'AccountController@destroy');
