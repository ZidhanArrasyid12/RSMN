<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Thorik extends Controller
{
    public function thorik()
    {
        return view ("pages.dokter.thorik");
    }
}
