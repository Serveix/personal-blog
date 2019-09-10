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

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index')->name('welcome');
Route::get('posts/{slug}', 'PostController@show')->name('post');

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('storage/images/posts/{path}', 'ImageController@show')
    ->name('posts.image')
    ->where('path', '(.*)');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('posts', 'Admin\PostController@index')->name('admin.posts.index');
    Route::get('posts/new', 'Admin\PostController@create')->name('admin.posts.create');
    Route::post('posts/new', 'Admin\PostController@store');
});
