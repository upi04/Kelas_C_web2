<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $biodata = [
            'Nama' => 'Nur Hikmah',
            'Tempat, Tanggal Lahir' => 'Pangaparang, 6 Juli 2005',
            'Jenis Kelamain' => 'Perempuan',
            'Agama' => 'Islam',
            'Alamat' => 'Pangaparang',
            'E-mail' => 'nhnurhikmah675@gmail.com',
            'Telepon' => '0821-9229-7597',
            'Pendidikan' => 'S1-Teknik Informatika',
            'Hobi' => 'Scroll TikTok',
            'Cita-Cita' => 'Pengangguran Kaya',
            'Keahlian' => 'Figma',
            'Pengalaman Organisasi' => 'CSSMoRA'
        ];
        return view('home', compact('biodata'));
    }
}