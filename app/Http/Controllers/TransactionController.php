<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('transactions.index');
    }

    public function create()
    {
        $title = "Tambah Transaksi";
        return view('transactions.form', compact('title'));
    }
    
    public function update($id)
    {
        $title = "Update Transaksi";
        $nama_pembeli = "Syarif";
        $products = [
            [
                "nama" => "Laptop Asus",
                "jumlah" => 1,
            ]
        ];
        $jenis_pembayaran = 1;
        $jumlah_pembayaran = 1000000;
        return view('transactions.form', compact('title', 'nama_pembeli', 'products', 'jenis_pembayaran', 'jumlah_pembayaran'));
    }
}
