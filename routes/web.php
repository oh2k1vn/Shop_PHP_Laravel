<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
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

// Trang chủ
Route::get('/', [homeController::class, 'index'])->name('homePage');

// About
Route::get('/about', [homeController::class, 'about'])->name('aboutPage');

// sản phẩm
Route::get('/san-pham', [homeController::class, 'product'])->name('productPage');
Route::get('/chi-tiet-san-pham/{id}', [homeController::class, 'productDetail'])->name('productDetailPage');

// Danh mục
Route::get('/danh-muc-san-pham/{id}', [homeController::class, 'show_category']);

// Thương hiệu
Route::get('/thuong-hieu-san-pham/{id}', [homeController::class, 'show_brand']);

// Đăng nhập
Route::get('/login', [homeController::class, 'sigon'])->name('loginPage');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');

// Giỏ hàng
Route::get('/show-cart', [cartController::class, 'show_cart'])->name('checkoutPage');
Route::get('/delete-cart/{rowId}', [cartController::class, 'delete_cart']);
Route::post('/save-cart', [cartController::class, 'save_cart']);
Route::post('/update-cart', [cartController::class, 'update_cart']);


Route::group(['namespace' => 'admin'], function () {

    // Thông tin shop
    Route::get('/admin', [adminController::class, 'index'])->name('dashboardPage');
    Route::post('/admin-dashboard', [adminController::class, 'dashboard']);

    // sản phẩm Admin
    Route::get('/add-product', [adminController::class, 'addProduct'])->name('addProductPage');
    Route::get('/all-product', [adminController::class, 'allProduct'])->name('allProductPage');
    Route::get('/edit-product/{id}', [adminController::class, 'editProduct'])->name('editProductPage');
    Route::get('/delete-product/{id}', [adminController::class, 'deleteProduct'])->name('deleteProductPage');
    Route::post('/save-product', [adminController::class, 'saveProduct']);
    Route::post('/update-product/{id}', [adminController::class, 'updateProduct']);
});
