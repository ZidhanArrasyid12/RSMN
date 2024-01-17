<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Infokamar extends Controller
{
    public function infokamar()
    {
        return view ("pages.layanan.infokamar");
    }
}
