<?php

use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\SourceController as AdminSourceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->as('admin.')->group(function () {

    Route::resource('/news', AdminNewsController::class);
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/sources', AdminSourceController::class)->only(['index']);
});

Route::prefix('blog')->group(function () {

    Route::resource('/news', NewsController::class)->only(['index', 'show']);

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
});
