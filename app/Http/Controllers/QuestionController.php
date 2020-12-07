<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $items = Question::all();
        return view('question.index', ['items' => $items]);
    }
    public function form(Request $request)
    {
        return view('question.form', ['items' => $items]);
    }

    public function question2(Request $request)
    {
        $items = Question::all();
        return view('question.index2', ['items' => $items]);
    }
    public function question(Request $request)
    {
        $items = Question::all();
        return view('question.question', ['items' => $items]);
    }

    public function re(Request $request)
    {
        $items = Question::all();
        return view('question.form', ['items' => $items]);
        //return redirect('/question');
    }

    public function edit(Request $request)
    {
        $id = $request->user_id;
        return view('question.edit', ['id' => $id]);
    }

    public function update(Request $request)
    {
        DB::table('questions')->where('user_id', $request->user_id)->update(['contents_of_question' => $request->contents_of_question]);
        $items = Question::all();
        return view('question.index2', ['items' => $items]);
    }

    public function add(Request $request)
    {
        $id = $request->user_id;
        return view('question.add', ['id' => $id]);
    }

    public function create(Request $request)
    {
        DB::table('questions')->where('user_id', $request->user_id)->update(['answer' => $request->answer]);
        $items = Question::all();
        return view('question.index2', ['items' => $items]);
    }

    public function create2(Request $request)
    {
        $question = new Question;
        $form = $request->all();
        unset($form['_token']);
        $question->fill($form)->save();
        return redirect('/user_q');
    }
}
