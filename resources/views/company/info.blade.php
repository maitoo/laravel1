@extends('layouts.information')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('content')
    <table border="2">
    <tr><th class="a">ユーザーid</th><th>店名</th><th>店情報</th><th>紹介文</th><th>アレルギー情報</th><th>店の種類</th><th>地方</th><th>エリア</th><th>宗教情報</th><th>リンク</th><th>住所</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->user_id}}</td>
            <td>{{ $item->store_name}}</td>
            <td>{{ $item->store_information}}</td>
            <td>{{ $item->store_introduction}}</td>
            <td>{{ $item->allergies}}</td>
            <td>{{ $item->store_stype}}</td>
            <td>{{ $item->rural_code}}</td>
            <td>{{ $item->area}}</td>
            <td>{{ $item->religion}}</td>
            <td>{{ $item->url}}</td>
            <td>{{ $item->street_address}}</td>
        </tr>
    @endforeach
    </table>
@endsection

