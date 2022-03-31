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

// Tìm kiếm
Route::post('/tim-kiem', [homeController::class, 'search']);

// About
Route::get('/about', [homeController::class, 'about'])->name('aboutPage');

// sản phẩm
Route::get('/san-pham', [homeController::class, 'product'])->name('productPage');
Route::get('/chi-tiet-san-pham/{id}', [homeController::class, 'productDetail'])->name('productDetailPage');

// Danh mục
Route::get('/danh-muc-san-pham/{id}', [homeController::class, 'show_category']);

// Thương hiệu
Route::get('/thuong-hieu-san-pham/{id}', [homeController::class, 'show_brand']);

// Đăng nhập & Đăng ký & Đăng  xuất
Route::get('/login', [homeController::class, 'sigon'])->name('loginPage');
Route::get('/sigup', [homeController::class, 'sigup'])->name('sigupPage');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');

// Giỏ hàng
Route::get('/show-cart', [cartController::class, 'show_cart'])->name('checkoutPage');
Route::post('/post-show-cart', [cartController::class, 'post_show_cart']);
Route::get('/delete-cart/{rowId}', [cartController::class, 'delete_cart']);
Route::post('/save-cart', [cartController::class, 'save_cart']);
Route::post('/update-cart', [cartController::class, 'update_cart']);

// checkout
Route::get('/checkout', [checkoutController::class, 'checkouut']);
Route::post('/save-checkout', [cartController::class, 'save_checkout']);
Route::post('/add-customer', [checkoutController::class, 'add_customer']);

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

    // Đơn hàng
    Route::get('/oder', [adminController::class, 'oders'])->name('oderPage');
    Route::post('/update-modal/{id}', [adminController::class, 'update_modal']);
});
