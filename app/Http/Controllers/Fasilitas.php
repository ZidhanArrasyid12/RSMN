<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fasilitas extends Controller
{
    public function fasilitas()
    {
        return view ("pages.layanan.fasilitas");
    }
}
