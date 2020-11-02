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


Route::resource('post', App\Http\Controllers\PostController::class);


Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create']);
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'postCreate'])->name('profile.postCreate');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::get('/profile/delete', [App\Http\Controllers\ProfileController::class, 'delete']);
//Route::post('/post/edit', ['as' =>'post/post.edit','post'=>'PostController@edit']);
//Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'postEdit'])->name('profile.postEdit');
//Route::post('/post/update', ['as' =>'post/post.edit','post'=>'PostController@edit']);
//Route::post('/post/edit', [App\Http\Controllers\PostController::class, 'update'])->name('post.postEdit');