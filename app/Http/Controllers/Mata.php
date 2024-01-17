<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mata extends Controller
{
    public function mata()
    {
        return view ("pages.poliklinik.mata");
    }
}
