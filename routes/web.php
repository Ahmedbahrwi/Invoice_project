<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Models\Customer;
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

Route::get('/', function () {
    return view('welcome');
});
//customers
Route::get('/customers', [CustomerController::class,'index'])->name('get.index');
Route::get('/customers/show/{id}', [CustomerController::class,'show'])->name('get.show');
Route::get('/customers/create', [CustomerController::class,'create'])->name('get.create');
Route::post('/customers/store', [CustomerController::class,'store'])->name('post.create');
//items
Route::get('/items', [ItemController::class,'index'])->name('item.index');
Route::get('/items/show/{id}', [ItemController::class,'show'])->name('item.show');
Route::get('/items/create', [ItemController::class,'create'])->name('item.create');
Route::post('/items/store', [ItemController::class,'store'])->name('item.create');
