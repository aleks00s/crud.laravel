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

Route::get('/', 'App\Http\Controllers\HomeController@index');



Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/posts', 'IndexController')->name('admin.posts.index');
        Route::get('/posts/create', 'CreateController')->name('admin.posts.create');
        Route::post('/posts', 'StoreController')->name('admin.posts.store');
        Route::get('/posts/{post}', 'ShowController')->name('admin.posts.show');
        Route::get('/posts/{post}/edit', 'EditController')->name('admin.posts.edit');
        Route::put('/posts/{post}', 'UpdateController')->name('admin.posts.update');
        Route::delete('/posts/{post}', 'DestroyController')->name('admin.posts.destroy');
    });
});

Route::get('/main', [App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
