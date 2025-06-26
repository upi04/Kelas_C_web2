<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }

/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Display a listing of the Mahasiswa.
     *
     * Retrieves all Mahasiswa records from the database and passes 
     * them to the index view for display.
     *
     * @return \Illuminate\View\View
     */

/*******  f6f0dcb6-dfcd-4ccd-afcd-244db90c995a  *******/
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
