<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@index');
Route::get('post/', 'PostController@index')->name('post.index');
Route::get('post/', 'PostController@index')->name('post.index');
Route::get('about', 'PageController@about')->name('page.about');
Route::get('teachers', 'PageController@teachers')->name('page.teachers');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::get('post/show/{id}', 'PostController@show')->name('post.show');
Route::post('post/', 'PostController@store')->name('post.store');

