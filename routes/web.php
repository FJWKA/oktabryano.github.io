<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/pemasukan', function () {
    return view('pemasukan');
})->name('pemasukan');

Route::post('/pemasukan', function () {
    // Proses penyimpanan data pemasukan
    return view('manajemen'); // Ganti 'manajemen' dengan nama view halaman utama Anda
})->name('manajemen');

Route::get('/pengeluaran', function () {
    return view('pengeluaran');
})->name('pengeluaran');

Route::post('/pengeluaran', function () {
    // Proses penyimpanan data pengeluaran
    return view('manajemen'); // Ganti 'manajemen' dengan nama view halaman utama Anda
})->name('manajemen');

Route::get('/manajemen', function () {
    return view('manajemen');
});

use App\Http\Controllers\TransactionController;

Route::get('/', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');



