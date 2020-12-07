<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController  extends Controller
{
  public function index(Request $request)
  {
      $items = DB::select('select * from information');
      return view('test.index', ['items' => $items]);
  }

  public function post(Request $request)
  {
      $items = DB::select('select * from information');
      return view('hello.index', ['items' => $items]);
  }

  public function add(Request $request)
  {
      return view('test.add');
  }

  public function create(Request $request)
  {
      $param = [
        "user_id" => $request->user_id,
        "store_name"=> $request->store_name,
        "store_information" => $request->store_information,
        "store_introduction"  => $request->store_introduction,
        "allergies"  => $request->allergies,
        "store_stype"  => $request->store_type,
        "rural_code"  => $request->rural_code,
        "area"  => $request->area,
        "religion"  => $request->religion,
        "url"  => $request->url,
        "street_address"  => $request->street_address,
          
      ];
      DB::insert('insert into information (user_id, store_name, store_information,store_introduction,allergies,store_stype,rural_code,area,religion,url,street_address) 
      
      values (:user_id, store_name, :store_information,:store_introduction,:allergies,:store_stype,:rural_code,area,:religion,:url,:street_address)', $param);
      return redirect('/test');
  }
}
