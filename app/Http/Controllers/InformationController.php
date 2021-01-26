<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use config\pref;
use App\Http\Requests\InformationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class InformationController extends Controller
{
    //登録情報表示画面へ
    public function index(Request $request)
    {
        $items = Information::all();
        $num = $items->count();
        $items = Information::simplePaginate(9);
        $keyword = "";
        return view('kanrisya.indexDB', ['items' => $items, 'keyword' => $keyword, 'num' => $num]);
    }
    //店情報登録画面へ
    public function add(Request $request)
    {
        //$user_id = Auth::user()->user_id;
    return view('company.add'/*, ['user_id' => $user_id]*/);
    }
    //登録情報追加
    public function create(InformationRequest $request)
    {
        /*$information = new Information;
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        $items = Information::all();*/
        $point = $request->allergies;
        $allergies = implode(',', $point);

        $param = [
            'user_id' => $request->user_id,
            'store_name' => $request->store_name,
            'store_information' => $request->store_information,
            'store_introduction' => $request->store_introduction,
            'rural_code' => $request->rural_code,
            'photo_pass' => $request->photo_pass,
            'allergies' => $allergies,
            'store_stype' => $request->store_stype,
            'area' => $request->area,
            'religion' => $request->religion,
            'url' => $request->url,
            'street_address' => $request->street_address,
        ];
        DB::table('information')->insert($param);
        $items = Information::all();
        $num = $items->count();
        $items = Information::simplePaginate(9);
        $keyword = "";
        return view('kanrisya.index', ['items' => $items, 'keyword' => $keyword, 'num' => $num]);
    }
    //更新画面へ
    public function edit(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('kanrisya.edit', ['form' => $item]);
    }
    //登録情報更新
    public function update(InformationRequest $request)
    {
        $information = Information::find($request->serial_number);
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        return redirect('information');
    }
    //削除画面へ
    public function delete(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('kanrisya.del', ['form' => $item]);
    }
    //登録情報削除
    public function remove(Request $request)
    {
        Information::find($request->serial_number)->delete();
        return redirect('/information');
    }

    //詳細画面へ
    public function find(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('kanrisya.find', ['item' => $item]);
    }
    //キーワード検索
    public function keyword(Request $request)
    {
        $keywords = $request->input('keyword');
 
        $query = information::query();
        
        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('store_name', $keyword)
                ->orWhere('user_id', $keyword)
                ->orWhere('allergies', $keyword)
                ->orWhere('store_stype', $keyword)
                ->orWhere('rural_code', $keyword)
                ->orWhere('area', $keyword)
                ->orWhere('religion', $keyword)
                ->orWhere('url', $keyword)
                ->orWhere('street_address', $keyword);
            }
        }

        $items = $query->get();

        $num = $items->count();

        $keyword = implode("    ", $keywords);
 
        $items = $query->simplePaginate(9);
 
        return view('kanrisya.index', compact('items', 'keyword', 'num'));
    }

}
