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
// see if these next 5 routes even need to be in here i think its already done now. 



Route::get('blog/{slug}',  ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'] )
 ->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('contact', 'pagesController@getContact'); 
Route::post('contact', 'pagesController@postContact'); 
Route::get('about', 'pagesController@getAbout');
Route::get('/', 'pagesController@getIndex');
Route::resource('posts', 'PostController');


route::resource('categories', 'CategoryController', ['except' => ['create']]);
route::resource('tags', 'TagController', ['except' => ['create']]);
route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destory']);
Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);







Auth::routes(['register' => false]);

Route::get('/home', 'pagesController@getIndex')->name('home');
