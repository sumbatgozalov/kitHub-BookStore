<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\AdminChartsController;

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

Route::get('/', [HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect', [HomeController::class,'redirect'])->name('redirect');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/view_category', [AdminController::class,'view_category'])->name('view_category');
Route::get('/view_language', [AdminController::class,'view_languages'])->name('view_language');
Route::post('/add_category', [AdminController::class,'add_category'])->name('add_category');
Route::post('/add_language', [AdminController::class,'add_language'])->name('add_language');
Route::get('/delete_category/{id}', [AdminController::class,'delete_category'])->name('delete_category');
Route::get('/delete_language/{id}', [AdminController::class,'delete_language'])->name('delete_language');
Route::get('/view_products', [AdminController::class,'view_products'])->name('view_products');
Route::get('/show_products', [AdminController::class,'show_products']);
Route::post('/add_product', [AdminController::class,'add_product'])->name('add_product');
Route::get('/delete_product/{id}', [AdminController::class,'delete_product'])->name('delete_product');
Route::get('/update_product/{id}', [AdminController::class,'update_product'])->name('update_product');
Route::post('/update_product_confirm/{id}', [AdminController::class,'update_product_confirm'])->name('update_product_confirm');
Route::post('/bulk_delete', [AdminController::class,'bulkDelete'])->name('bulk_delete');

Route::get('/view_icons', [AdminViewController::class,'view_icons'])->name('view_icons');
Route::get('/view_charts', [AdminChartsController::class,'view_charts'])->name('view_charts');

