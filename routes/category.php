<?php 
Route::get('category/list-Category','CategoryController@list')->name('listCate');
Route::get('category/add-cate','CategoryController@add')->name('addCate');
Route::post('category/add-cate','CategoryController@create')->name('addCate');
Route::get('category/edit_cate/{id}','CategoryController@edit')->name('editCate');
Route::post('category/edit_cate/{id}','CategoryController@p_edit')->name('editCate');
Route::get('category/delete_cate/{id}','CategoryController@delete')->name('deleteCate');
 ?>