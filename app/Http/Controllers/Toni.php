<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Toni extends Controller
{
    public function toni()
    {
        return view ("pages.dokter.toni");
    }
}
