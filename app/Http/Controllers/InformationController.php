<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use config\pref;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class InformationController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from information');
        return view('company.indexDB', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('company.add');
    }

    public function create(Request $request)
    {
        $post_data = $request->except('photo_pass');
        $photo_pass = $request->file('photo_pass');
        $temp_path = $photo_pass->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);

        $user_id = $post_data['user_id'];
        $store_name = $post_data['store_name'];
        $store_information = $post_data['store_information'];
        $store_introduction = $post_data['store_introduction'];
        $allergies = $post_data['allergies'];
        $store_stype = $post_data['store_stype'];
        $rural_code = $post_data['rural_code'];
        $area = $post_data['area'];
        $religion = $post_data['religion'];
        $url = $post_data['url'];
        $street_address = $post_data['street_address'];

        $data = array(
            'temp_path' => $temp_path,
            'user_id' => $user_id,
            'read_temp_path' => $read_temp_path,
            'store_name' => $store_name,
            'store_information' => $store_information,
            'store_introduction' => $store_introduction,
            'allergies' => $allergies,
            'store_stype' => $store_stype,
            'rural_code' => $rural_code,
            'area' => $area,
            'religion' => $religion,
            'url' => $url,
            'street_address' => $street_address,
        );
        $request->session()->put('data', $data);
        return view('company.create', compact('data') );
    }

    public function confirm(Request $request) {
        $data = $request->session()->get('data');
        $temp_path = $data['temp_path'];
        $read_temp_path = $data['read_temp_path'];
        $filename = str_replace('public/temp/', '', $temp_path);

        $storage_path = 'public/productimage/'.$filename;
        $request->session()->forget('data');
        Storage::move($temp_path, $storage_path);
        $read_path = str_replace('public/', 'storage/', $storage_path);

        $user_id = $data['user_id'];
        $store_name = $data['store_name'];
        $store_information = $data['store_information'];
        $store_introduction = $data['store_introduction'];
        $allergies = $data['allergies'];
        $store_stype = $data['store_stype'];
        $rural_code = $data['rural_code'];
        $area = $data['area'];
        $religion = $data['religion'];
        $url = $data['url'];
        $street_address = $data['street_address'];

        $param = [
            'photo_pass' => $read_path,
            'user_id' => $user_id,
            'store_name' => $store_name,
            'store_information' => $store_information,
            'store_introduction' => $store_introduction,
            'allergies' => $allergies,
            'store_stype' => $store_stype,
            'rural_code' => $rural_code,
            'area' => $area,
            'religion' => $religion,
            'url' => $url,
            'street_address' => $street_address,
        ];
        DB::table('information')->insert($param);
        return redirect('/company');
    }
    public function edit(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('kanrisya.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $information = Information::find($request->serial_number);
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        return redirect('kanrisyaDB');
    }

    public function delete(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('kanrisya.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        Information::find($request->serial_number)->delete();
        return redirect('/kanrisyaDB');
    }
}

/*namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use config\pref;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        $items = Information::all();
        return view('company.indexDB', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('company.add');
    }

    public function create(Request $request)
    {
        /*$param = [
            'store_name' => $request->store_name,
            'rural_code' => $request->rural_code,
            'area' => $request->area,
            'photo_pass' => $request->photo_pass,
            'store_information' => $request->store_information,
            'street_address' => $request->street_adress,
            'url' => $request->url,
            'religion' => $request->religion,
            'allergies' => $request->allergies,
            'store_introduction' => $request->store_introduction,
        ];
        $information = new Information;
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        $items = Information::all();
        return view('company.indexDB', ['items' => $items]);
    }

   
}*/

