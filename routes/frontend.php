<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\DetailController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PolicyController;








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

Route::get('/', [HomeController::class, 'ViewHome'])->name('ViewHome');

Route::get('/detail', [DetailController::class, 'ViewDetail'])->name('ViewDetail');

Route::get('/product', [ProductController::class, 'ViewListProduct'])->name('ViewListProduct');

Route::get('/cart', [CartController::class, 'ViewCart'])->name('ViewCart');
Route::get('/addtocart/{id}', [CartController::class, 'AddToCart'])->name('AddToCart');
Route::patch('/updatecart', [CartController::class, 'UpdateCart'])->name('UpdateCart');
Route::delete('/removecart', [CartController::class, 'RemoveCart'])->name('RemoveCart');
Route::get('/addcart', [CartController::class, 'AddCart'])->name('AddCart');





Route::get('/checkout', [CheckoutController::class, 'ViewCheckout'])->name('ViewCheckout');
Route::post('/confirmcheckout', [CheckoutController::class, 'Checkout'])->name('Checkout');
Route::get('/completecheckout', [CheckoutController::class, 'CompleteCheckout'])->name('CompleteCheckout');


Route::get('/news', [NewsController::class, 'View_News'])->name('View_News');

Route::get('/contact', [ContactController::class, 'View_Contact'])->name('View_Contact');

Route::get('/policy', [PolicyController::class, 'View_Policy'])->name('View_Policy');









