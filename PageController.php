<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function daftarBuku(){
        // Data buku
        $buku = [
            "Dasar-Dasar Pemrograman Web",
            "Kisah Inspiratif Tokoh-Tokoh Dunia",
            "Pintu Menuju Dunia Lain",
            "Matematika Mudah untuk Semua",
            "Jangan Takut untuk Bermimpi",

        ];
        return view('buku')->with('buku', $buku);
    }
}
