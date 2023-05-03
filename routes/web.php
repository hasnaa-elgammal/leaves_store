<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryContoller;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashbaordController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PlantController as AdminPlantController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/plants', [ProductController::class, 'index']);
Route::get('/plants/{id}', [ProductController::class, 'show']);
Route::get('/profile', [UserController::class, 'edit']);


Route::prefix('admin')->group(function () {
    Route::get('/', [DashbaordController::class, 'index'])->name('dashboard');
    Route::resource('/reviews', AdminReviewController::class);
    Route::resource('/categories', AdminCategoryContoller::class);
    Route::resource('/plants', AdminPlantController::class);
    Route::resource('/orders', AdminOrderController::class);
    Route::resource('/users', AdminUserController::class);
    Route::resource('/contacts', AdminContactController::class);
});



