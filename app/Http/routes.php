<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostsController@index');

/**
 * Posts
 */
Route::get('admin', function() {
	return redirect()->route('admin.post.list');
});
Route::get('admin/posts', ['as'=>'admin.post.list','uses'=>'PostsAdminController@index']);
Route::get('admin/posts/create-post', ['as'=>'admin.post.create','uses'=>'PostsAdminController@create']);
Route::post('admin/posts/store-post', ['as'=>'admin.post.store','uses'=>'PostsAdminController@store']);
Route::get('admin/posts/edit/{id}', ['as'=>'admin.post.edit','uses'=>'PostsAdminController@edit']);
Route::put('admin/posts/update/{id}', ['as'=>'admin.post.update','uses'=>'PostsAdminController@update']);
Route::get('admin/posts/destroy/{id}', ['as'=>'admin.post.destroy','uses'=>'PostsAdminController@destroy']);
