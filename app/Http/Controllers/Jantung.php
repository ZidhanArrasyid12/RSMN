<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jantung extends Controller
{
    public function jantung()
    {
        return view ("pages.poliklinik.jantung");
    }
}
