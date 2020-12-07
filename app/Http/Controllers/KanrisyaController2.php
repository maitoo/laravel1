<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KanrisyaController2 extends Controller
{
    public function index(Request $request)
    {
        return view('kanrisya.index2');
    }
}
