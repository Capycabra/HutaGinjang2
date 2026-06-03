<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Penginapan;
use App\Models\Fasilitas;
use App\Models\GaleriGeosite;

class GeositeController extends Controller
{
    public function hutaGinjang()
    {
        $umkm = Umkm::where('geosite', 'huta ginjang')->where('status', true)->get();
        $penginapan = Penginapan::where('geosite', 'huta ginjang')->where('status', true)->get();
        $fasilitas = Fasilitas::where('geosite', 'huta ginjang')->where('status', true)->get();
        $galeriGeosite = GaleriGeosite::where('geosite', 'huta ginjang')->where('status', true)->get();
        $kategoriGaleri = $galeriGeosite->pluck('kategori')->unique()->values();

        return view('geosite.huta-ginjang', compact('umkm', 'penginapan', 'fasilitas', 'galeriGeosite', 'kategoriGaleri'));
    }
}