<?php

use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\SourceController as AdminSourceController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Blog\FeedbackController;
use App\Http\Controllers\Blog\OrderController;
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

Route::redirect('/', '/blog/news');

Route::prefix('admin')->as('admin.')->group(function () {

    Route::get('/', AdminMainController::class)->name('index');

    Route::resource('/news', AdminNewsController::class);
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/sources', AdminSourceController::class)->only(['index']);
    Route::resource('/feedback', AdminFeedbackController::class)->only(['index', 'destroy']);
    Route::resource('/orders', AdminOrderController::class)->only(['index', 'destroy']);
});

Route::prefix('blog')->group(function () {

    Route::resource('/news', NewsController::class)->only(['index', 'show']);

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

    Route::resource('/feedback', FeedbackController::class)->only(['index', 'store']);

    Route::resource('/order', OrderController::class)->only(['index', 'store']);
});
