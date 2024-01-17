<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Poliklinik extends Controller
{
    public function poliklinik()
    {
        return view ("pages.poliklinik");
    }
}
