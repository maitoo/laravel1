<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController3 extends Controller
{
    public function index(Request $request)
    {
        return view('company.index3', ['msg'=>'登録情報']);
    }
}
