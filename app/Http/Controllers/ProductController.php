<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        $title = "Tambah Produk";
        return view('products.form', compact('title'));
    }
    
    public function update($id)
    {
        $title = "Update Produk";
        $kategori = 2;
        $nama = "Laptop";
        $harga = 1000000;
        $stok = 100;
        $deskripsi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, dolorum.";
        return view('products.form', compact('title', 'kategori', 'nama', 'harga', 'stok', 'deskripsi'));
    }
}
