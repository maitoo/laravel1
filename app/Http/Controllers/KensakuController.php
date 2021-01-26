<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Information;

class KensakuController extends Controller
{
  
   public function kankou(Request $request)
   {
       return view('aa.kankou');
   }

   public function kankouarea(Request $request)
   {
       return view('aa.kankouarea');
   }

   public function insyoku(Request $request)
   {
       $items = '';
       return view('aa.insyoku', ['items' => $items]);
   }

   public function insyokuarea(Request $request)
   {
       return view('aa.insyokuarea');
   }

   public function syukuhaku(Request $request)
   {
       return view('aa.syukuhaku');
   }

   public function syukuhakuarea(Request $request)
   {
       return view('aa.syukuhakuarea');
   }

   public function key(Request $request)
    {
        $keyword = $request->input('insyoku');
 
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
 
        return view('aa.insyoku', compact('items', 'keyword'));
    }

    public function insyokukey(Request $request)
    {
       

        $keyword = $request->input('insyoku');
 
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
 
        $sort = $request->sort;
       $items = DB::table('Information')->orderBy('store_name', 'asc')->Paginate(2);
       $param = ['items' => $items, 'sort' => $sort];
        return view('aa.insyoku_table', compact('items', 'keyword') );
    }

    public function syukuhakukey(Request $request)
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
        
        return view('aa.syukuhaku_table', compact('items', 'keyword'));
    }

    public function kankoukey(Request $request)
    {
        $keyword = $request->input('kankou');
 
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
 
        

        return view('aa.kankou_table', compact('items', 'keyword'));
    }
}