@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
担当者一覧(1対多)画面
@endsection

@section('content')
<a href="/jissyu17">hasone</a>
<a href="/jissyu17/show">hasmany</a>
<table>
    <tr><th>Person</th><th>Subject</th></tr>
    @foreach ($hasItems as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
                <table width="100%">
                @foreach ($item->subjects as $obj)
                    <tr><td>{{$obj->getData()}}</td></tr>
                @endforeach
                </table>
            </td>
        </tr>
    @endforeach
</table>
<div style="margin:10px;"></div>
<table>
<tr><th>Person</th></tr>
@foreach ($noItems as $item)
      <tr>
          <td>{{$item->getData()}}</td>
      </tr>
@endforeach
</table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
