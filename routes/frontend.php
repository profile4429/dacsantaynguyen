<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\DetailController;
use App\Http\Controllers\frontend\ProductController;



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


