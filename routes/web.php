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


Route::get('/about', function () {
	$test = 'about page test';
    return view('about',compact(test));
});

Route::get('/contact', function () {
	$test = 'contact page test';
    return view('contact',compact(test));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('
	home');

