<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $items = Customer::all();
        return view('customer.index', ['items' => $items]);
    }

    public function home2(Request $request)
    {
        if (Auth::check()) {
            return view('user.home2');
        } else {
            // ログインしていなかったら、Login画面を表示
            return view('auth.login');
        }
    }

    public function getAuth(Request $request)
    {
        return view('user.login2');
    }

    public function postAuth(Request $request)
    {
        $user_id = $request->user_id;
        $user_password = $request->user_password;

        if (Auth::attempt(['user_id' => $user_id, 'user_password' => $user_password])) {
            $m = '〇';
        } else {
            $m = '×';
        }
        return view('user.home2', ['m' =>$m]);
    }

    public function add(Request $request)
    {
        return view('user.auth');
    }

    public function create(Request $request)
    {
        /*$param = [
            'user_id' => $request->user_id,
            'user_name' => $request->user_name,
            'user_mail' => $request->user_mail,
            'country_code' => $request->country_code,
            'language_code' => $request->language_code,
            'user_password' => $request->user_password,
            'user_date' => $request->created_at,
        ];
        DB::insert('insert into customers (user_id, user_name, user_mail, country_code, language_code, user_password, user_date) values(:user_id, :user_name, :user_mail, :country_code, :language_code, :user_password, :user_date)', $param);
        */
        $customer = new Customer;
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/login2');
    }

    public function questionIndex(Request $request)
    {
        $items = Question::all();
        return view('question.question', ['items' => $items]);
    }

    public function formIndex(Request $request)
    {
        return view('question.form');
    }

    public function reformIndex(Request $request)
    {
        $question = $request->question;
        return view('question.form2', ['question' => $question]);
    }

}
