<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!in
|
*/
Route::get('/admin', [HomeController::class, 'ViewHomeAdmin'])->name('ViewHomeAdmin');

Route::get('/admin/viewlogin', [LoginController::class, 'ViewLogin'])->name('ViewLogin');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');


Route::post('/admin/login', [LoginController::class, 'Login'])->name('Login');

Route::get('/admin/user', [UserController::class, 'ViewUser'])->name('ViewUser');

Route::get('/admin/product', [ProductController::class, 'ViewProduct'])->name('ViewProduct');
Route::post('/admin/addproduct', [ProductController::class, 'AddProduct'])->name('AddProduct');
Route::post('/admin/deleteproduct', [ProductController::class, 'DeleteProduct'])->name('DeleteProduct');
Route::get('/admin/getproductid', [ProductController::class, 'GetProductID'])->name('GetProductID');





Route::get('/admin/category', [CategoryController::class, 'ViewCategory'])->name('ViewCategory');
Route::post('/admin/addcategory', [CategoryController::class, 'AddCategory'])->name('AddCategory');
Route::post('/admin/deletecategory', [CategoryController::class, 'DeleteCategory'])->name('DeleteCategory');



Route::get('/admin/order', [OrderController::class, 'ViewOrder'])->name('ViewOrder');
Route::get('/admin/changestatus', [OrderController::class, 'ChangeStatus'])->name('ChangeStatus');













