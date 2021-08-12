<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [NewsController::class, 'index'])
    ->name('news');

Route::group(['prefix' => 'news'], function () {
    Route::get('/categories', [NewsController::class, 'categories'])
        ->name('news.categories');
    Route::get('/categories/{id}', [NewsController::class, 'currentCategory'])
        ->name('news.current-category');
    Route::get('/show/{id}', [NewsController::class, 'show'])
        ->name('news.show');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('admin');
    Route::get('/create-news', [AdminController::class, 'createNews'])
        ->name('admin.create-news');
    Route::post('/create-news', [AdminController::class, 'createNews'])
        ->name('admin.create-news');
});
