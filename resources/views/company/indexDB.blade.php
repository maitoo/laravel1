@extends('layouts.customer')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<div class="ab">
<div class="abc">
<input type="button" onclick="location.href='../company'" value="完了">
</div>
</div>

@section('content')
@foreach ($items as $item)
    <table border="2" class="table-size" >
    @csrf
        <tr>
            <td class="name" width="300px;">店名</td>
            <td height="100px;" >{{ $item->store_name}}</td>
        </tr>
        <tr>
            <td class="name1">店情報</td>
            <td class="info" height="90px;">{{ $item->store_information}}
            </td>
        </tr>
        <tr>
            <td class="name2">紹介文</td>
            <td class="info2" height="90px;">{{ $item->store_introduction}}</td>
        </tr>
        <tr>
        <td class="name3">アレルギー情報</td>
        <td class="info3" height="70px;">{{ $item->allergies}}</td>
        </tr>
        <tr>
        <td class="name4">地方</td>
        <td class="info4" height="45px;">{{ $item->rural_code}}</td>
        </tr>
        <tr>
        <td class="name5">エリア</td>
        <td class="info5" height="45px;">{{ $item->area}}</td>
        </tr>
        <tr>
        <td class="name6">宗教情報</td>
        <td class="info6" height="70px;">{{ $item->religion}}</td>
        </tr>
        <tr>
        <td class="name7">リンク</td>
        <td class="info7" height="45px;"><a href="{{ $item->url}}">{{ $item->url}}</a></td>
        </tr>
        <td class="name8">住所</td>
        <td class="info8" height="45px;">{{ $item->street_address}}</td>
        <tr>
        <td class="name9">写真</td>
        <td><img src="{{ $item->photo_pass}}"></td>
        </tr>
    </table><br>
    @endforeach
@endsection

