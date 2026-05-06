<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;
use App\Models\Produk;

// Dashboard Utama
Route::get('/', function () {
    $totalSupplier = Supplier::count();
    $totalProduk = Produk::count();
    $totalStok = Produk::sum('stok');
    $nilaiInventori = Produk::sum('harga');
    
    return view('dashboard', compact('totalSupplier', 'totalProduk', 'totalStok', 'nilaiInventori'));
});

// Halaman Latihan PHP (opsional)
Route::get('/latihan', function () {
    return view('latihan');
});

// Data Supplier
Route::get('/supplier', function () {
    $suppliers = Supplier::paginate(10);
    return view('supplier.index', compact('suppliers'));
});

// Data Produk
Route::get('/produk', function () {
    $produk = Produk::with('supplier')->paginate(10);
    $suppliers = Supplier::all();
    return view('produk.index', compact('produk', 'suppliers'));
});
