<?php 
Route::get('user','UserController@index')->name('user');
Route::get('add-user','UserController@add')->name('addUser');
Route::post('add-user','UserController@p_add')->name('addUser');
Route::get('edit-user/{id}','UserController@edit')->name('editUser');
Route::post('edit-user/{id}','UserController@p_edit')->name('editUser');
Route::get('delete-user/{id}','UserController@delete')->name('deleteUser');
 ?>