<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\IntroController;
use App\Http\Controllers\Backend\PictureController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\PolicyController;
use App\Http\Controllers\Backend\ContactController;












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
// Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');


// Route::post('/admin/login', [LoginController::class, 'Login'])->name('Login');

Route::get('/admin/user', [UserController::class, 'ViewUser'])->name('ViewUser');

Route::get('/admin/product', [ProductController::class, 'ViewProduct'])->name('ViewProduct');
Route::post('/admin/addproduct', [ProductController::class, 'AddProduct'])->name('AddProduct');
Route::post('/admin/updateproduct', [ProductController::class, 'UpdateProduct'])->name('UpdateProduct');
Route::post('/admin/deleteproduct', [ProductController::class, 'DeleteProduct'])->name('DeleteProduct');
Route::get('/admin/getproductid', [ProductController::class, 'GetProductID'])->name('GetProductID');


Route::get('/admin/category', [CategoryController::class, 'ViewCategory'])->name('ViewCategory');
Route::post('/admin/addcategory', [CategoryController::class, 'AddCategory'])->name('AddCategory');
Route::post('/admin/deletecategory', [CategoryController::class, 'DeleteCategory'])->name('DeleteCategory');
Route::get('/admin/getcategoryid', [CategoryController::class, 'GetCategoryID'])->name('GetCategoryID');




Route::get('/admin/order', [OrderController::class, 'ViewOrder'])->name('ViewOrder');
Route::get('/admin/changestatus', [OrderController::class, 'ChangeStatus'])->name('ChangeStatus');
Route::get('/admin/getorderid', [OrderController::class, 'GetOrderID'])->name('GetOrderID');





Route::get('/admin/intro', [IntroController::class, 'ViewIntro'])->name('ViewIntro');
Route::post('/admin/addintro', [IntroController::class, 'AddIntro'])->name('AddIntro');
Route::post('/admin/updateintro', [IntroController::class, 'UpdateIntro'])->name('UpdateIntro');
Route::get('/admin/getintroid', [IntroController::class, 'GetIntroID'])->name('GetIntroID');



Route::get('/admin/picture', [PictureController::class, 'ViewPicture'])->name('ViewPicture');
Route::post('/admin/addpicture', [PictureController::class, 'AddPicture'])->name('AddPicture');
Route::post('/admin/deletepicture', [PictureController::class, 'DeletePicture'])->name('DeletePicture');


Route::get('/admin/news', [NewsController::class, 'ViewNews'])->name('ViewNews');
Route::post('/admin/addnews', [NewsController::class, 'AddNews'])->name('AddNews');
Route::post('/admin/deletenews', [NewsController::class, 'DeleteNews'])->name('DeleteNews');
Route::post('/admin/updatenews', [NewsController::class, 'UpdateNews'])->name('UpdateNews');
Route::get('/admin/getnewsid', [NewsController::class, 'GetNewsID'])->name('GetNewsID');



Route::get('/admin/policy', [PolicyController::class, 'ViewPolicy'])->name('ViewPolicy');
Route::post('/admin/addpolicy', [PolicyController::class, 'AddPolicy'])->name('AddPolicy');
Route::post('/admin/deletepolicy', [PolicyController::class, 'DeletePolicy'])->name('DeletePolicy');
Route::post('/admin/updatepolicy', [PolicyController::class, 'UpdatePolicy'])->name('UpdatePolicy');
Route::get('/admin/getpolicyid', [PolicyController::class, 'GetPolicyID'])->name('GetPolicyID');

Route::get('/admin/contact', [ContactController::class, 'ViewContact'])->name('ViewContact');
Route::post('/admin/updatecontact', [ContactController::class, 'updateContact'])->name('updateContact');




