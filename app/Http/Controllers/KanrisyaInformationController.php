<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KanrisyaInformationController extends Controller
{
    public function index(Request $request)
    {
        $items = Information::all();
        return view('kanrisya.indexDB', ['items' => $items]);
    }
    public function edit(Request $request)
    {
      $item = DB::table('information')
          ->where('user_id',$request->user_id)->first();  
        return redirect('kanrisya.edit',['item' => $item]);
    }
    public function update(Request $request)
    {
      $param = [
     'user_id' => $request->user_id,
     'store_name' => $request->store_name,
     'store_information' => $request->store_information,
     'store_introdution' => $request->store_introduction,
     'allergies' => $request->allergies,
     'store_stype' => $request->store_stype,
     'rural' => $request->rural,
     'area' => $request->area,
     'religion' => $request->religion,
     'url' => $request->url,
     'street_address' => $request->street_address,
     'photo_pass' => $request->photo_pass,
      ];
      DB::table('information')
      ->where('user_id',$request->user_id)
      ->update($param);
      return view('/kanrisyaDB');
    }
    public function del(Request $request)
    {
      $item = DB::table('information')
          ->where('user_id',$request->user_id)->first();
          return view('kanrisya.del',['item' => $item]);
    }
    function remove(Request $request)
    {
      DB::table('information')
          ->where('user_id',$request->user_id)->delete();
      return redirect('/kanrisyaDB');
    }
}
