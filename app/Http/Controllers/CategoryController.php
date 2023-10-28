<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function create()
    {
        $title = "Tambah Kategori";
        return view('categories.form', compact('title'));
    }
    
    public function update($id)
    {
        $title = "Update Kategori";
        $kategori_induk = 1;
        $nama_kategori = "Elektronik";
        $urutan = "1";
        $deskripsi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minus!";
        return view('categories.form', compact('title', 'kategori_induk', 'nama_kategori', 'urutan', 'deskripsi'));
    }
}
