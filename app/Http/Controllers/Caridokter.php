<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Caridokter extends Controller
{
    public function caridokter()
    {
        return view ("pages.caridokter");
    }
}
