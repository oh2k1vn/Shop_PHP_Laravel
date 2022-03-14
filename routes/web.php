<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
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

Route::get('/', [homeController::class, 'index'])->name('homePage');

Route::get('/san-pham', [homeController::class, 'product'])->name('productPage');

Route::get('/gio-hang', [homeController::class, 'checkout'])->name('checkoutPage');

Route::get('/addCart', function() {
    return view('home.checkout');
})->name('addCartPage');


// Route::get('/chi-tiet-san-pham/{$id}', [homeController::class, 'productDetail'])->name('productDetailPage');
Route::get('/chi-tiet-san-pham/{id}', [homeController::class, 'productDetail'])->name('productDetailPage');
Route::get('/chi-tiet-san-pham/add-cart/{id}', [homeController::class, 'addCart'])->name('addCart');
Route::post('/save-cart', [homeController::class, 'saveCart']);

Route::get('/danh-muc-san-pham/{id}', [homeController::class, 'show_category']);
Route::get('/thuong-hieu-san-pham/{id}', [homeController::class, 'show_brand']);


Route::get('/login', [homeController::class, 'sigon'])->name('loginPage');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');


Route::group(['namespace' => 'admin'], function () {


    Route::get('/admin', [adminController::class, 'index'])->name('dashboardPage');
    Route::post('/admin-dashboard', [adminController::class, 'dashboard']);

    // _product
    Route::get('/add-product', [adminController::class, 'addProduct'])->name('addProductPage');
    Route::get('/all-product', [adminController::class, 'allProduct'])->name('allProductPage');
    Route::get('/edit-product/{id}', [adminController::class, 'editProduct'])->name('editProductPage');
    Route::get('/delete-product/{id}', [adminController::class, 'deleteProduct'])->name('deleteProductPage');

    Route::post('/save-product', [adminController::class, 'saveProduct']);
    Route::post('/update-product/{id}', [adminController::class, 'updateProduct']);
});
