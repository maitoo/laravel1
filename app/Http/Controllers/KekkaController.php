<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Information;

use App\Person;

class KekkaController extends Controller
{
   /*public function kensakuDB(Request $request)
   {
       $items = DB::table('people')->simplePaginate(5);
       $items = DB::select('select * from Information where area = "札幌" and religion = "宿泊"');
       return view('aa.kensakuDB', ['items' => $items]);
   }*/

   public function kensakuDB(Request $request)
   {
       $items = Information::all();
       return view('aa.kensakuDB', ['items' => $items]);
   } 

   public function find(Request $request)
   {
       $items = Information::find($request->syukuhaku);
       return view('aa.kensakuDB', ['items' => $items]);
   }

   public function key(Request $request)
    {
        $keyword = $request->input('syukuhaku');
 
        $query = information::query();
 
        if (!empty($keyword)) {
            $query->where('store_name', 'LIKE', "%{$keyword}%")
                ->orWhere('store_information', 'LIKE', "%{$keyword}%")
                ->orWhere('store_introduction', 'LIKE', "%{$keyword}%")
                ->orWhere('allergies', 'LIKE', "%{$keyword}%")
                ->orWhere('store_stype', 'LIKE', "%{$keyword}%")
                ->orWhere('rural_code', 'LIKE', "%{$keyword}%")
                ->orWhere('area', 'LIKE', "%{$keyword}%")
                ->orWhere('religion', 'LIKE', "%{$keyword}%")
                ->orWhere('url', 'LIKE', "%{$keyword}%")
                ->orWhere('street_address', 'LIKE', "%{$keyword}%");
        }
 
        $items = $query->get();
 
        return view('aa.kensakuDB', compact('items', 'keyword'));
    }
}