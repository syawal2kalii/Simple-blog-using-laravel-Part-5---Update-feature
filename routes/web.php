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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/article","ArticleController@index")->name("article");
Route::get("/article/form","ArticleController@form")->name("article.form");
Route::post("/article/store","ArticleController@store")->name("article.store");
//Route::get()
