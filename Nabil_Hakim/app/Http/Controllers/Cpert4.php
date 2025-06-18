<?php

namespace App\Http\Controllers;

use App\Models\MPert4;
use Illuminate\Http\Request;

class Cpert4 extends Controller
{
    public function index()
    {
        $data = MPert4::all();
        return view('pertemuan4', compact('data'));
    }
}
