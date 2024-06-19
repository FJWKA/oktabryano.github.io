<?php

// routes/web.php

use App\Http\Controllers\ManajemenController;
use Illuminate\Support\Facades\Route;

Route::get('/pemasukan', [ManajemenController::class, 'showPemasukan'])->name('pemasukan.index');

Route::post('/pemasukan', [ManajemenController::class, 'storePemasukan'])->name('pemasukan.index');

Route::get('/pengeluaran', [ManajemenController::class, 'showPengeluaran'])->name('pengeluaran.index');
Route::post('/pengeluaran', [ManajemenController::class, 'storePengeluaran'])->name('pengeluaran.store');

Route::get('/manajemen', [ManajemenController::class, 'index'])->name('manajemen.index');


use App\Http\Controllers\TransactionController;

Route::get('/', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');



