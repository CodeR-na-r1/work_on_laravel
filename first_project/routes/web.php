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

Route::get('/', "App\Http\Controllers\MainController@main")->name('main');

Route::get('/catalog', "App\Http\Controllers\MainController@catalog")->name('catalog');
Route::get('/catalog_a/{id_author}', "App\Http\Controllers\MainController@catalog_a")->name('catalog_a');
Route::get('/catalog_g/{id_genre}', "App\Http\Controllers\MainController@catalog_g")->name('catalog_g');

Route::get('/catalog/{param_id_book?}', "App\Http\Controllers\MainController@item")->name('item');
Route::post('/catalog/{param_id_book}/submit_comment', "App\Http\Controllers\CommentController@item_add_comment")->name('item_add_comment');

Route::get('/about', "App\Http\Controllers\MainController@about")->name('about');