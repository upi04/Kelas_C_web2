<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function HomeController(){
        $Biodata = [
            'nama' => 'Wira Fadhil',
            'tempat_tanggal_lahir' => 'Padang, 26 Mei 2003',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Merdeka 123',
            'email' => 'wirafadhil20@gmail.com',
            'telepon' => '08123456789',
            'pendidikan' => 'S1 Teknik Informatika',
            'hobi' => 'Coding, Membaca',
            'cita_cita' => 'AI Data Scientist',
            'keahlian' => 'PHP, Laravel, JavaScript',
            'pengalaman_organisasi' => 'Ketua OSIS SMA, Anggota UKM IT',
        ];
        return view('Biodata.about', compact('Biodata'));
    }
}
