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
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishListItemController;
use Illuminate\Support\Facades\View;

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

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/plants', [ProductController::class, 'index']);
Route::get('/categories/{cat_id}/plants/{id}', [ProductController::class, 'show']);
Route::get('cart', [CartItemController::class, 'userCartItemsHome'])->name('cart.list');
Route::post('cart', [CartItemController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartItemController::class, 'destroy'])->name('cart.destroy');
Route::put('/cart', [CartItemController::class, 'update'])->name('cart.update');
Route::get('/contact', [ContactMessageController::class, 'index'])->name('contact');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
Route::get('wishlist', [WishListItemController::class, 'userWishListItemsHome'])->name('wishlist.list');
Route::post('wishlist', [WishListItemController::class, 'store'])->name('wishlist.store');
Route::delete('/wishlist/{id}', [WishListItemController::class, 'destroy'])->name('wishlist.destroy');
Route::get('/edit_profile', [UserController::class, 'edit'])->name('edit_profile.edit');
Route::put('/edit_profile', [UserController::class, 'update'])->name('edit_profile.update');
Route::get('/thank-you', function () {
    return view('customer.thank_you');
});
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::resource('/Homecategories', CategoryController::class);
    Route::resource('/HomePlants', ProductController::class);
});


Route::prefix('admin')->group(function () {
    Route::get('/', [DashbaordController::class, 'index'])->name('dashboard');
    Route::resource('/reviews', AdminReviewController::class);
    Route::resource('/categories', AdminCategoryContoller::class);
    Route::resource('/plants', AdminPlantController::class);
    Route::resource('/orders', AdminOrderController::class);
    Route::resource('/users', AdminUserController::class);
    Route::resource('/contacts', AdminContactController::class);
});

Route::get('/logout', [LogoutController::class, 'destroy'])->name('user.logout');



