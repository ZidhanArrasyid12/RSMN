<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dalam extends Controller
{
    public function dalam()
    {
        return view ("pages.poliklinik.dalam");
    }
}
