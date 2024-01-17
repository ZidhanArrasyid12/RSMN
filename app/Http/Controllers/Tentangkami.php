<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tentangkami extends Controller
{
    public function tentangkami()
    {
        return view ("pages.tentangkami.tentangkami");
    }
}
