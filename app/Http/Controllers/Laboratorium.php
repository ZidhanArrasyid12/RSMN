<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laboratorium extends Controller
{
    public function laboratorium()
    {
        return view ("pages.laboratorium");
    }
}
