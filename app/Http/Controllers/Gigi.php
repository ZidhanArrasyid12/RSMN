<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gigi extends Controller
{
    public function gigi()
    {
        return view ("pages.poliklinik.gigi");
    }
}
