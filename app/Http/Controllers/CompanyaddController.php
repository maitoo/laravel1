<?php

namespace App\Http\Controllers;

use App\Model\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyaddController extends Controller
{
  
   public function index(Request $request)
   {
    $items = Information::all();
    return view('company.info', ['items' => $items]);
   }

  public function add(Request $request)
  {
    return view('company.add');
  }
  public function create(Request $request)
  {
   // $this->validate($request, information::$rules);
    $information = new Information;
    $form = $request->all();
    unset($form['_token']);
    $information->timestamps = false;
    $information->fill($form)->save();
    return redirect('/company7');
  }
}