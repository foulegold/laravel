<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [IndexController::class, 'index']);

Route::group(['prefix' => 'news'], function () {
    Route::get('/', [NewsController::class, 'index'])
        ->name('news');
    Route::get('/categories', [NewsController::class, 'categories'])
        ->name('news.categories');
    Route::get('/categories/{id}', [NewsController::class, 'currentCategory'])
        ->name('news.currentCategory');
    Route::get('/show/{id}', [NewsController::class, 'show'])
        ->name('news.show');
});
