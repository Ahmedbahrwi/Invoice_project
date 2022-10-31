<?php

use App\Http\Controllers\ApiCustomerController;
use App\Http\Controllers\ApiItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//customers
Route::get('/customers', [ApiCustomerController::class,'index'])->name('get.index');
Route::get('/customers/show/{id}', [ApiCustomerController::class,'show'])->name('get.show');
Route::get('/customers/create', [ApiCustomerController::class,'create'])->name('get.create');
Route::post('/customers/store', [ApiCustomerController::class,'store'])->name('post.create');
//items
Route::get('/items', [ApiItemController::class,'index']);
Route::get('/items/show/{id}', [ApiItemController::class,'show']);
Route::get('/items/create', [ApiItemController::class,'create']);
Route::post('/items/store', [ApiItemController::class,'store']);
