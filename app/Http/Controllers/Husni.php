<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Husni extends Controller
{
    public function husni()
    {
        return view ("pages.dokter.husni");
    }
}
