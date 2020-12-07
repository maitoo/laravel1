<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KanrisyaController extends Controller
{
    public function index(Request $request)
    {
        return view('kanrisya.index');
    }
}
