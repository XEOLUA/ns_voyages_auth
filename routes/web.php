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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page/{slug}', 'PagesController@showPage');
Route::get('/', 'PagesController@showMainPage');
Route::get('/posts', 'PostController@showPosts');
Route::get('/postdel/{postId}', 'PostController@deletePost');
Route::get('/postadd', 'PostController@showForm');
Route::post('/postadd', 'PostController@addPost')->name('addPost');
//Route::get('/', 'MyMenuController@showTree');
