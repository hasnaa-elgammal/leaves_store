<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\CategoryController as Category;
use App\Http\Controllers\Admin\ContactController as Contact;
use App\Http\Controllers\Admin\DashbaordController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PlantController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as User;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/orders/{user_id}', [OrderController::class, 'ViewAllOrders']);
Route::get('users/profile',[UserController::class,'edit']);
Route::put('users/profile/{user_id}',[UserController::class,'Update']);

//products
// Route::resource('products', ProductController::class);

//reviews
Route::resource('reviews', ReviewController::class);


//categories
Route::resource('categories', Category::class);
//plants
Route::resource('plants', PlantController::class);
//orders
Route::resource('orders', AdminOrderController::class);
//users
Route::resource('users', User::class);
//contact
Route::resource('contacts', Contact::class);
//dashboard

Route::get('/', [DashbaordController::class, 'index'])->name('dashboard');




