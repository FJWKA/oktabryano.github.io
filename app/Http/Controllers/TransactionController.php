<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('manajemen');
    }

    public function store(Request $request)
    {
        // Validasi data request jika diperlukan
        $validatedData = $request->validate([
            'type' => 'required',
            'amount' => 'required|numeric',
        ]);

        // Proses penyimpanan data ke database atau logika lainnya

        // Kembalikan view dengan data yang diperlukan
        return view('manajemen')->with('success', 'Transaksi berhasil ditambahkan!');
    }
}
