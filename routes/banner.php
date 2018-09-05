<?php 
Route::get('banner','BannerController@index')->name('banner');
Route::get('add-banner','BannerController@add')->name('addBanner');
Route::post('add-banner','BannerController@p_add')->name('addBanner');
 ?>