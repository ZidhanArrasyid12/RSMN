<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Drhusni extends Controller
{
    public function drhusni()
    {
        return view ("pages.janji.drhusni");
    }
}
