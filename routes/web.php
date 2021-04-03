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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

Route::resource('photos', PhotoController::class);
Route::resource('posts', PostsController::class);
Route::resource('categories', CategoriesController::class);