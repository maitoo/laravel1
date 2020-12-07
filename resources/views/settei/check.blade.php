@extends('layouts.master')

@section('title', '確認画面')


@section('content')
<div class="body">
    <div class="top">
        <h3>確認画面です!</h3>
    </div>

    <form action="{{ url('/complete')}}" method="post">

        <table border="1" align="center">
            <tr>
                <th>氏名</th>
                <td><b>{{ $name }}</b></td>
            </tr>
            <tr>
                <th>性別</th>
                <td><b>{{ $gender }}</b></td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td><b>{{ $question }}</b></td>
            </tr>
        </table>
        <div class="top">
        <input type = "submit" value =この内容で完了画面へ進む。>
        </div>
    </form>
    <div class="top">
    <a href="{{ url('/contact') }}" >Back Home</a>
    </div>
</div>
@stop