<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

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
Route::get('index', [PagesController::class, 'index'])->name('index');

Route::get('/abouts', [PagesController::class, 'abouts'])->name('abouts');

Route::get('/services', [PagesController::class, 'services'])->name('services');




Route::resource('post',App\Http\Controllers\PostController::class);
/* 

Route::get('/about', function () {
    return view('pages.about');
});


*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
