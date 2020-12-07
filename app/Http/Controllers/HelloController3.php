<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController3 extends Controller
{
  
   public function index(Request $request)
   {
       return view('company.kigyou');
   }

   public function post(Request $request)
   {
       $validate_rule = [
           '店名' => 'required',
           '地方' => 'required',
           'エリア' => 'required',
           '写真' => 'required',
           '店情報' => 'required',
           'リンク' => 'required',
           '宗教情報' => 'required',
           'アレルギー' => 'required',
           '紹介文' => 'required',
       ];
       $this->validate($request, $validate_rule);
       return view('hello.kigyou', ['msg'=>'正しく入力されました！']);
   }

}
