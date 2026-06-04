<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriController extends Controller
{
    // Halaman galeri publik
    public function index()
    {
        // Ambil semua data galeri yang status aktif
        $allGaleri = Galeri::where('status', true)
            ->orderBy('created_at', 'desc')
            ->get();

        // Kelompokkan secara dinamis berdasarkan kolom kategori di DB
        $galeriByKategori = $allGaleri->groupBy('kategori');

        return view('pages.galeri', compact('galeriByKategori'));
    }

}