@extends('layouts.customer')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('content')
<form action="confirm" method="post">
    <table border="2" align="center">
    @csrf
        <tr>
          <td class="name" width="300px;">店名</td>
          <td height="100px;" >{{ $data['store_name']}}</td>
        </tr>
        <tr>
            <td class="name1">店情報</td>
            <td class="info" height="90px;">{{ $data['store_information']}}
            </td>
        </tr>
        <tr>
            <td class="name2">紹介文</td>
            <td class="info2" height="90px;">{{ $data['store_introduction']}}
        </td>
        </tr>
        <tr>
            <td class="name3">アレルギー情報</td>
            <td class="info3" height="70px;">{{ $data['allergies']}}</td>
        </tr>
        <tr>
            <td class="name4">地方</td>
            <td class="info4" height="45px;">{{ $data['rural_code']}}</td>
        </tr>
        <tr>
            <td class="name5">エリア</td>
            <td class="info5" height="45px;">{{ $data['area']}}</td>
        </tr>
        <tr>
            <td class="name10">店の種類</td>
            <td class="info" height="90px;">{{ $data['store_stype']}}
            </td>
        </tr>
        <tr>
            <td class="name6">宗教情報</td>
            <td class="info6" height="70px;">{{ $data['religion']}}</td>
        </tr>
        <tr>
            <td class="name7">リンク</td>
            <td class="info7" height="45px;">
        <a href="{{ $data['url']}}">{{ $data['url']}}</a></td>
        </tr>
            <td class="name8">住所</td>
            <td class="info8" height="45px;">{{ $data['street_address']}}</td>
        <tr>
            <td class="name9">写真</td>
            <td><img src="{{$data['read_temp_path']}}"></td>
        </tr>
    </table>
    <input type="submit" name="action" value="送信"/>
    </form>
@endsection

