<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohcontroller extends Controller
{
    public function index() 
    {
        $produk=['laptop','hp','ipad'];
        return view('produk.index',compact('produk'));
    }
}
