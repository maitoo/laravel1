@extends('layouts.customer')
{{--店の登録情報表示--}}
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">


@section('content')
    <form action="/information/keyword" method="GET">
    @csrf
    <input type="text" style= "width:900px;height:50px"; name="keyword" placeholder="       🔍id・メールアドレス等を入力(スペース区切りで複数条件検索可)" value="{{$keyword}}">
    <tr><td><input class="search" type="submit" value="検索"></td></tr>
    </form>

@if ($items->count())

    @if (!null == $keyword)
        <p style="color: black; margin: -10px -1200px 0 -10px; font-size: 25px;">検索結果は<span style="color: green;">{{$num . "件"}}</span>です。</p>
    @else
        <p style="color: black; margin: -10px -1200px 0 -10px;">登録件数は<span style="color: green; font-size: 25px;">{{$num . "件"}}</span>です。</p>
    @endif

    @foreach ($items as $item)
    <TD>
    <table border="2" style="width: 400px; margin: 10px 30px;" align="left">
    
        <tr>
            <th>ユーザーid</th><td>{{ $item->user_id}}</td>
        </tr>

        <tr>
            <th>店名</th><td>{{ $item->store_name}}</td>
        </tr>

        <tr>    
            <th>都道府県</th><td>{{ $item->rural_code}}</td>
        </tr>

        <tr>
            <th>店の種類</th><td>{{ $item->store_stype}}</td>
        </tr>

        <tr>
            <th>住所</th><td>{{ $item->street_address}}</td>
        </tr>

        <tr>
            <th>写真</th><td><img src="{{ $item->photo_pass}}" width="50" height="40" align="center"></td>
        </tr>

        <tr>{{--flagが1なら公開、それ以外は非公開--}}
            <th>公開情報</th>
            @empty($item->flag)
            <td style="color: red">非公開</td>
            @else
            <td style="color: green;">公開</td>
            @endempty
        </tr>

        <tr>{{--更新画面へ--}}
            <th></th><td><a href="/information/edit?serial_number={{$item->serial_number}}">更新</a></td>
        </tr>

        <tr>{{--削除画面へ--}}
            <th></th><td><a href="/information/del?serial_number={{$item->serial_number}}">削除</a></td>
        </tr>

        <tr>
            <th></th><td><a href="/information/find?serial_number={{$item->serial_number}}">詳細</a></td>
        </tr>
    </table>
    @endforeach 
@else
    <p style="font-size: 50px;">検索結果は<span style="color: red;">0件<span style="color: black;">です。</p>
@endif
    {{ $items->appends(Request::only('keyword'))->links() }}
@endsection

