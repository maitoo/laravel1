<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Information;

use Illuminate\Pagination\paginator;
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

    public function kekka_s(Request $request)
    {
        $sort = $request->sort;
        //$items = DB::table('Information')->simplePaginate(3);
        $items = DB::table('Information')->orderBy('store_name', 'asc')->Paginate(2);
        //$items = Information::orderBy('store_name', 'desc')->Paginate(2);
        $param = ['items' => $items, 'sort' => $sort];
        return view('kensaku.kekka_s', $param);
    }

   public function kekka_i(Request $request)
   {
       $sort = $request->sort;
       $items = DB::table('Information')->orderBy('store_name', 'asc')->Paginate(2);
       $param = ['items' => $items, 'sort' => $sort];
       return view('kensaku.kekka_i', $param);
   }

   public function kekka_k(Request $request)
   {
    $sort = $request->sort;
    //$items = DB::table('Information')->simplePaginate(3);
    $items = DB::table('Information')->orderBy('store_name', 'asc')->Paginate(2);
    //$items = Information::orderBy('store_name', 'desc')->Paginate(2);
    $param = ['items' => $items, 'sort' => $sort];
    return view('kensaku.kekka_k', $param);
}
}