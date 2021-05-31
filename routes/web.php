<?php

use App\Http\Controllers\ArticleController;
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
Auth::routes(['register' => true]);

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [ArticleController::class, 'index'])->name('home');

    Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
        Route::get('/{article}', [ArticleController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'articles', 'as' => 'article.'], function () {
            Route::get('/create', [ArticleController::class, 'create'])->name('create');
            Route::post('/store', [ArticleController::class, 'store'])->name('store');
            Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
            Route::put('/update/{article}', [ArticleController::class, 'update'])->name('update');
            Route::delete('/delete/{article}', [ArticleController::class, 'destroy'])->name('delete');
        });
    });
});
