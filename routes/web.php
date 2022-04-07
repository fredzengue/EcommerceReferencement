<?php

use App\Http\Controllers\HomeController;
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
    return view('home');
});

/* products routes */
Route::get('/products/{rowId}', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/products/single/{rowId}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog.index');
});
Route::get('/about-us', function () {
    return view('about-us');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
