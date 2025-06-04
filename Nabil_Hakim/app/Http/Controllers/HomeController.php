<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $biodata = [
            'Nama' => 'Nabil Hakim',
            'Tempat, Tanggal Lahir' => 'Makassar, 5 Februari 2006',
            'Jenis Kelamain' => 'Laki-laki',
            'Agama' => 'Islam',
            'Alamat' => 'Jl. Muhajirin 2 No. 25 B Mallengkeri',
            'E-mail' => 'knabilhakin@gmail.com',
            'Telepon' => '0857-8757-2305',
            'Pendidikan' => 'S1-Teknik Informatika',
            'Hobi' => 'Nonton Anime',
            'Cita-Cita' => 'Freelancer',
            'Keahlian' => 'C++, HTML, CSS, Javascript, Dart',
            'Pengalaman Organisasi' => 'CSSMoRA, Inready Workgroup, OSPSH, PMII'
        ];
        return view('home', compact('biodata'));
    }
}
