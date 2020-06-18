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

Route::get('/', 'PageController@index')->name("pages.index");
Route::get('/about', 'PageController@about')->name("pages.about");
Route::get('/blog', function () {
    $posts = TCG\Voyager\Models\Post::all();
    return view('pages.blog', compact('posts'));
});
Route::get('post/{id}', 'PostController@show')->name('pages.post');
Route::get('/course', 'PageController@course')->name("pages.course");
Route::get('/teachers', 'PageController@teachers')->name("pages.teachers");
Route::get('/pricing', 'PageController@pricing')->name("pages.pricing");
Route::get('/contact', 'PageController@contact')->name("pages.contact");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
