<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class CompanyController4 extends Controller
{
    public function index(Request $request)
    {
       $items = Information::all();
       return view('company.indexDB',['item'=>$items]);
    }
}
