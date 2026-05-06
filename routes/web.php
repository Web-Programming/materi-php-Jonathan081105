<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return redirect()->route('supplier.index');
});

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::resource('produk', ProdukController::class);
