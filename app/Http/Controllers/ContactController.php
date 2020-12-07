<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ContactController extends Controller
{
    public function top()
    {
        return view('settei.top');
    }

    public  function check(Request $request){
        $name = $request->input('name');
        $gender = $request->input('gender');
        $question = $request->input('question');

        //方法1 普通
        // return view('contact.check')->with('name',"$name")
        //                             ->with('gender',"$gender")
        //                             ->with('question',"$question");

        // 方法2 配列 良さ気

        return view('settei.check')->with([
                                        'name'=>"$name",
                                        'gender'=>"$gender",
                                        'question'=>"$question"
                                        ]);
    }
}