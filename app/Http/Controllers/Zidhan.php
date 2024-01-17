<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Zidhan extends Controller
{
    public function zidhan()
    {
        return view ("pages.dokter.zidhan");
    }
}
