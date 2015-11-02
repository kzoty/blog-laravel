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

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'posts'], function(){
		Route::get('index', ['as'=>'admin.post.list','uses'=>'PostsAdminController@index']);
		Route::get('create-post', ['as'=>'admin.post.create','uses'=>'PostsAdminController@create']);
		Route::post('store-post', ['as'=>'admin.post.store','uses'=>'PostsAdminController@store']);
		Route::get('edit/{id}', ['as'=>'admin.post.edit','uses'=>'PostsAdminController@edit']);
		Route::put('update/{id}', ['as'=>'admin.post.update','uses'=>'PostsAdminController@update']);
		Route::get('destroy/{id}', ['as'=>'admin.post.destroy','uses'=>'PostsAdminController@destroy']);
	});
});

