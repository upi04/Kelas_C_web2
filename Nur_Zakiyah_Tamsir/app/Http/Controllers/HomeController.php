<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function biodata()
    {
        $biodata = [
            'Nama' => 'Nur Zakiyah Tamsir',
            'Tempat, Tanggal Lahir' => 'Makassar, 23 Mei 2005',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Jl. Dr. J. Leimena No. 50 ',
            'Email' => 'nurzakiyahtamsirzakiyah@gmail.com',
            'Telepon' => '082348949431',
            'Pendidikan' => 'Teknik Informatika - Universitas Islam Negeri Alaudddin',
            'Hobi' => 'Membaca, Menonton, Rebahan',
            'Cita-cita' => 'Data Analyst',
            'Keahlian' => 'Tidak ada',
            'Pengalaman Organisasi' => 'Anggota Osis Dan MPK'
        ];

        return view('biodata', compact('biodata'));
    }

}


