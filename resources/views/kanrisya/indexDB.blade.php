@extends('layouts.company')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<div class="abc">
<input type="button" onclick="location.href='../kanrisya'" value="完了">
</div>
</div>

@section('content')
    <table border="2">
    <tr><th class="a">ユーザーid</th><th>店名</th><th>店情報</th><th>紹介文</th><th>地方</th><th>エリア</th><th>店の種類</th><th>アレルギー情報</th><th>宗教情報</th><th>リンク</th><th>住所</th><th>写真</th><th>公開情報</th><th>更新</th><th>削除</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->user_id}}</td>
            <td>{{ $item->store_name}}</td>
            <td>{{ $item->store_information}}</td>
            <td>{{ $item->store_introduction}}</td>
            <td>{{ $item->rural_code}}</td>
            <td>{{ $item->area}}</td>
            <td>{{ $item->store_stype}}</td>
            <td>{{ $item->allergies}}</td>
            <td>{{ $item->religion}}</td>
            <td><a href="{{ $item->url}}">{{ $item->url}}</a></td>
            <td>{{ $item->street_address}}</td>
            <td>{{ $item->photo_pass}}</td>
            @empty($item->flag)
            <td>非公開</td>
            @else
            <td class="公開">公開</td>
            @endempty
            <td><a href="/information/edit?serial_number={{$item->serial_number}}">更新</a></td>
            <td><a href="/information/del?serial_number={{$item->serial_number}}">削除</a></td>
        </tr>
    @endforeach
    </table>
@endsection

