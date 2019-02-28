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

Route::get('/', 'PublicPostController@index');
Route::get('/categorie/{slug}', 'CategoryController@tuttiipost')->name('categories.slug');
Route::get('/post/{slug}', 'PublicPostController@show')->name('post.slug');


Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/posts', 'PostController');
});
