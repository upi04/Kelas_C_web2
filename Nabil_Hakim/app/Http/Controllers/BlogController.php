<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = [
            'Laporan 1' => 'Pengenalan Laravel dan Dasar Pemrograman PHP',
            'Laporan 2' => 'Web Portofolio Laravel Part I',
            'Laporan 3' => 'Web Portofolio Laravel Part II',
        ];
        return view('blog', compact('blog'));
    }

    public function show($id) {
        if($id == 'Laporan 1') {
            return redirect('biodata');
        } else if($id == 'Laporan 2') {
            return redirect('about');
        } else if($id == 'Laporan 3') {
            return redirect('home');
        }
    }
}
