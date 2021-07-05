
'<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EcomController;
Use App\Http\Controllers\CartController;


 Route::get('/',[EcomController::class,"index"])->name('base');
//  Route::get('/cart',[CartController::class,"cart"])->name('cart');
 Route::get('/cart/{id}',[CartController::class,"addcart"])->name('addcart');
Route::get('/detail/{id}',[EcomController::class,"detail"])->name('detail');
Route::get('/add',[EcomController::class,"create"])->name('add');
Route::post('/add',[EcomController::class,"store"])->name('add');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
