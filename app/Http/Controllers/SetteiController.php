<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SetteiController extends Controller
{
  public function index(Request $request)
  {
    $item = DB::select('select * from questions');
    return view('settei.index',['items' => $items]);
  }
  public function post(Request $request)
  {
    $item = DB::select('select * from questions');
    return view('settei.index',['items' => $items]);
  }
  public function add(Request $request)
  {
    return view('settei.add');
  }
  public function create(Request $request)
  {
    $param = [
      'user_id' => $request->user_id,
      'contents_of_question' => $request->contents_of_question,
    ];
    DB::insert('insert into questions (user_id, contents_of_question) values
    (:user_id, :contents_of_question', $param);
    return redirect('/settei/add');
  }
}  
