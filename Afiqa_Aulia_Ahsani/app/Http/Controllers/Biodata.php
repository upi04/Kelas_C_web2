<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata extends Controller
{
     public function HomeController()
    {
        $Biodata = [
            "Nama" => "Afiqa Aulia Ahsani",
            "NIM" => "60200123090",
            "Jurusan" => "Teknik Informatika",
            "Kelas" => "C",
            "Tempat, Tanggal Lahir" => "Bulukumba, 29 April 2006",
            "Alamat" => "Bulukumba",
            "Agama" => "Islam",
            "Hobi" => "Mencoba Hal Baru",
            "Makanan Favorit" => "Mie Pangsit",
            "Minuman Favorit" => "Jus Alvokad",
            "Cita-Cita" => "Dosen sekaligus data Analist"
        ];
        return view('biodata', compact('Biodata'));
    }
}
