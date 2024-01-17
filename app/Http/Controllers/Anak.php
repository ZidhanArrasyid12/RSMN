<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Anak extends Controller
{
    public function anak()
    {
        return view ("pages.poliklinik.anak");
    }
}
