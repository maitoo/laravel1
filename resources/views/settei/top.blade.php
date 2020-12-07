@extends('layouts.master')

@section('title', '問い合わせ画面')




@section('content')
<div class="body">
    <div class="top">
        <h3>お問い合わせ画面です!</h3>
    </div>

    <form action="{{ url('/check')}}" method="post">
        {!! csrf_field() !!}
        <table border="1" align="center">
            <tr>
                <th>ユーザー</th>
                <td><input type="text" name="name" placeholder="氏名を入力して下さい。"></td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                <textarea name="question" cols="40" rows="3" placeholder="ご遠慮無く不満を教えて下さい"></textarea>
                </td>
            </tr>
        </table>
        <div class="top">
        <input type = "submit" value =この内容で確認する。>
        </div>
    </form>
</div>
@stop