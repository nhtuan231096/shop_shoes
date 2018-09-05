<?php 
Route::get('list-product','ProductController@list')->name('listPro');
Route::get('add-product','ProductController@add')->name('addPro');
Route::post('add-product','ProductController@p_add')->name('addPro');
Route::get('edit-product/{id}','ProductController@edit')->name('editPro');
Route::post('edit-product/{id}','ProductController@p_edit')->name('editPro');
Route::get('delete-product/{id}','ProductController@delete')->name('deletePro');
 ?>