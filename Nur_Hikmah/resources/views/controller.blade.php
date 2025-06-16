<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController
{
    public function index()
    {

        $produk = ['leptop', 'hp', 'ipad'];
        return view(view: 'produk.index' . compact(var_name: 'produk'));
    }
}