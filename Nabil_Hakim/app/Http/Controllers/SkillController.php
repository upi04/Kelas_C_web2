<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skill = [
            'Semester 1' => [
                'Algoritma dan Pemrograman',
                'Pengenalan Teknologi Informasi dan Ilmu Komputer',
            ],
            'Semester 2' => [
                'Pemrograman Terstruktur',
                'Sistem Operasi Komputer',
                'Fisika Terapan',
                'Elektronika Digital',
            ],
            'Semester 3' => [
                'Struktur Data',
                'Pemrograman Web 1',
                'Pemrograman Berorientasi Objek',
                'Sistem Tertanam',
            ],
            'Semester 4' => [
                'Pemrograman Perangkat Bergerak',
                'Pemrograman Web 2',
                'Statistika dan Probabilitas',
                'Jaringan Komputer',
            ],
        ];
        return view('skill', compact('skill'));
    }
}
