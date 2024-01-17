<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bedah extends Controller
{
    public function bedah()
    {
        return view ("pages.poliklinik.bedah");
    }
}
