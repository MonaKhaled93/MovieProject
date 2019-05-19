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

Route::namespace('BackEnd')->prefix('admin')->group(function(){
    Route::get('home' , 'Home@index');
//    Route::get('users' , 'Users@index');
//    Route::get('users/create' , 'Users@create');
//    Route::post('users' , 'Users@store');
//    Route::get('users/{id}' , 'Users@edit');
//    Route::post('users/{id}' , 'Users@update');
//    Route::get('users/delete/{id}' , 'Users@delete');
    Route::resource('users' , 'Users')->except(['show' , 'delete']);
    Route::resource('videos' , 'Videos')->except(['show']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
