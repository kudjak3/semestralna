<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::resource('blog', BlogController::class);
    Route::get('user/{user}/delete', [UserController::class,'destroy'])->name( 'user.delete');
    Route::get('blog/{blog}/delete', [BlogController::class,'destroy'])->name( 'blog.delete');
    Route::get('blog/{blog}/edit', [BlogController::class,'edit'])->name( 'blog.edit');
    Route::put('blog/{blog}/update', [BlogController::class,'update'])->name( 'blog.update');
    Route::post('blog/{blog}/update', [BlogController::class,'update'])->name( 'blog.update');
});
