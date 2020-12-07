<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController2 extends Controller
{
    public function index(Request $request)
    {
        return view('company.index2');
    }
}
