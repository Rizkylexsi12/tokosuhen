<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stokBarangController;
use App\Http\Controllers\dataCustomerController;
use App\Http\Controllers\riwayatPenjualanController;

Route::view('/', '1_Input_penjualan/input_penjualan') -> name('input_penjualan');
// Route::get('/', [stokBarangController::class, 'home']);

Route::post('/checkout', [stokBarangController::class, 'checkout'])->name('checkout');

Route::controller(stokBarangController::class)->group(function(){
    Route::get('/stok_barang', [stokBarangController::class, 'index'])->name('stok_barang');
    Route::get('/stok_barang/add', [stokBarangController::class, 'add']);
    Route::post('/stok_barang/insert', [stokBarangController::class, 'insert']);
    Route::get('/stok_barang/detail/{id}', [stokBarangController::class, 'detail']);
    Route::get('/stok_barang/edit/{id}', [stokBarangController::class, 'edit']);
    Route::post('/stok_barang/update/{id}', [stokBarangController::class, 'update']);
    Route::get('/stok_barang/delete/{id}', [stokBarangController::class, 'delete']);
    Route::get('/stok_barang/cari', [stokBarangController::class, 'search']);
    Route::get('/add-to-cart/{barcode}', [stokBarangController::class, 'addToCart']);
    Route::delete('remove-from-cart', [stokBarangController::class, 'remove']);
    Route::patch('update-cart', [stokBarangController::class, 'update_cart']);
});

Route::controller(dataCustomerController::class)->group(function(){
    Route::get('/data_customer', [dataCustomerController::class, 'index'])->name('data_customer');
    Route::get('/data_customer/add', [dataCustomerController::class, 'add']);
    Route::post('/data_customer/insert', [dataCustomerController::class, 'insert']);
    Route::get('/data_customer/detail/{id_customer}', [dataCustomerController::class, 'detail']);
    Route::get('/data_customer/edit/{id_customer}', [dataCustomerController::class, 'edit']);
    Route::post('/data_customer/update/{id_customer}', [dataCustomerController::class, 'update']);
    Route::get('/data_customer/delete/{id_customer}', [dataCustomerController::class, 'delete']);
    Route::get('/data_customer/cari', [dataCustomerController::class, 'search']);
});

Route::controller(riwayatPenjualanController::class)->group(function() {
    Route::get('/riwayat_penjualan',[riwayatPenjualanController::class, 'index']);
    Route::get('/riwayat_penjualan/detail/{id_penjualan}', [riwayatPenjualanController::class, 'detail']);
    Route::get('/riwayat_penjualan/cari', [riwayatPenjualanController::class, 'search']);
    Route::get('/riwayat_penjualan/filterdate', [riwayatPenjualanController::class, 'filterDate'])->name('filterDate');
});

Route::get('/stok_hadiah', function(){
    return view('6_Poin/stok_hadiah');
});

// buat halaman Redeem poin
// buat halaman riwayat redeem
// buat halaman stok hadiah
// buat validasi password jika akses data customer




