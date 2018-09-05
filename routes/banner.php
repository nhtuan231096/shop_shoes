<?php 
Route::get('banner','BannerController@index')->name('banner');
Route::get('add-banner','BannerController@add')->name('addBanner');
Route::post('add-banner','BannerController@p_add')->name('addBanner');
Route::get('edit-banner/{id}','BannerController@edit')->name('editBanner');
Route::post('edit-banner/{id}','BannerController@p_edit')->name('editBanner');
Route::get('delete-banner/{id}','BannerController@delete')->name('deleteBanner');
 ?>