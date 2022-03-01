<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use SebastianBergmann\Template\Template;

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


Route::get('/login', [homeController::class, 'login'])->name('loginPage');
Route::get('/singup', [homeController::class, 'singup'])->name('singupPage');
Route::get('/logout', [adminController::class, 'logout']);

// Danh mục sản phẩm trang chủ 
// Route::get('/danh-muc-san-pham/{$id}', ); 




// Route::get('/test', function () {
//     return view('admin.test');
// });


Route::group(['namespace' => 'admin'], function () {
    //Back end
    Route::get('/dashboard', [adminController::class, 'show_dashboard'])->name('showdashboardPage');
    Route::post('/admin-dashboard', [adminController::class, 'dashboard'])->name('dashboardPage');
    Route::get('/product', [adminController::class, 'product'])->name('productPage');

    // category_product
    Route::get('/add-product', [adminController::class, 'addProduct'])->name('addProductPage');
    Route::get('/all-product', [adminController::class, 'allProduct'])->name('allProductPage');
    Route::get('/edit-product/{id}', [adminController::class, 'editProduct']);
    Route::get('/delete-product/{id}', [adminController::class, 'deleteProduct']);

    Route::post('/save-product', [adminController::class, 'saveProduct']);
    Route::post('/update-product/{id}', [adminController::class, 'updateProduct']);
});
