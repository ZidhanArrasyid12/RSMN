<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saraf extends Controller
{
    public function saraf()
    {
        return view ("pages.poliklinik.saraf");
    }
}
