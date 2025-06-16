<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController
{
    public function index()
    {
        $produk = ['leptop', 'hp', 'ipad'];
        return view(view: 'index', data: compact('produk'));
    }
}
