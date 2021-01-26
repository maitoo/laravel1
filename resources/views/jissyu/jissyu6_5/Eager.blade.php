@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
Eagerローディング
@endsection

@section('content')
<a href="/jissyu17">hasone</a>
<a href="/jissyu17/show">hasmany</a>
<table>
    <tr><th></th><th>Subject</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->person_id}}</td>
            <td>{{$item->person->name}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
