<?php

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

Route::get('/hello/{name}', function(string $name) {
    return "Hello, $name";
});

Route::get('/about', function() {
    return "This is news feed project";
});

Route::get('/news', function() {
    return "NEWS FEED";
});

Route::get('/news/{id}', function(int $id) {
    return "Article with id $id";
});

Route::get('/debug', function() {
    return phpinfo();
});
