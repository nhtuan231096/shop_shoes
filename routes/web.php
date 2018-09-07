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
// Route admin
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin'],function(){
	Route::get('/','AdminController@index')->name('homeAdmin');
	require 'category.php';
	require 'product.php';
	require 'user.php';
	require 'banner.php';
});
// Route login admin
Route::get('/login','AuthController@login')->name('login');
Route::post('/login','AuthController@postLogin')->name('login');
Route::get('/logout','AuthController@logout')->name('logout');


Route::group(['prefix'=>'/'], function () {
 	Route::get('','HomeController@index')->name('home');
 	Route::get('home-login','HomeController@login')->name('HomeLogin');
 	Route::post('home-login','HomeController@p_login')->name('HomeLogin');
 	Route::get('home-logout','HomeController@logout')->name('HomeLogout');
 	Route::get('register','HomeController@register')->name('HomeRegister');
 	Route::post('register','HomeController@p_register')->name('HomeRegister');
 	Route::get('contact','HomeController@contact')->name('Contact');
 	
 	Route::get('product','HomeController@homeProduct')->name('homeProduct');
 	Route::get('//{slug}.html','HomeController@view')->name('view');


 	Route::get('add-cart/{id}','CartController@add_cart')->name('addCart');
 	Route::get('view-cart','CartController@view')->name('viewCart');
 	Route::get('update-cart/{id}','CartController@update')->name('update_cart');
 	Route::get('delete-cart/{id}','CartController@delete')->name('deleteCart');
 	Route::get('clear-cart','CartController@clear')->name('clearCart');

});
