@extends('layouts.kekkaDBapp')
<table class="migi">
<tr><th>検索</th><th>交通</th></tr>
<tr>
<td><INPUT border="1" type="button" onclick="" class="disp-img5"></td>
<td><INPUT border="1" type="button" onclick="" class="disp-img7"></td>
</tr>
</table>
@section('title', '宿泊')

@section('content1')
<table>
<tr><th>宿泊</th><th>飲食</th><th>観光</th><th>Free</th></tr>
<form action="/kensakukekka_s" method="post">
<tr>
  <td><INPUT border="1" type="button" onclick="location.href='./syukuhaku'" class="disp-img1"></td>
  <td><INPUT border="1" type="button" onclick="location.href='./insyoku'" class="disp-img2"></td>
  <td><INPUT border="1" type="button" onclick="location.href='./kankou'" class="disp-img3"></td>
  <td><INPUT border="1" type="button" onclick="location.href='./free'" class="disp-img4"></td>
  </tr>
  </table>
@endsection

@section('content2')
<hr size="1">
<p id="srchBrdCrmbs">
  <a href="http://localhost:8000/syukuhaku">北海道</a>
  &nbsp;>
  <span class="grpLocationLocus">
    <a href="http://localhost:8000/syukuhakuarea">札幌</a>
  </span>
  &nbsp;>&nbsp; 宿泊結果    
</p>
<div class="saikensaku">
<input type="text"  style= "width:900px;height:50px;"; name="syukuhaku" placeholder="🔍再検索">
<tr><th></th><td>
      <input class="touroku" type="submit" onclick="location.href=''" value="検索"></td></tr>
</div>
<hr size="1">
<div class="sapporo">札幌</div>
@endsection
@section('content')
@foreach ($items as $item)
    <table border="2" class="table-size" >
    @csrf
        <tr>
          <td class="name" width="300px;">店名</td><td height="100px;" >{{ $item->store_name}}</td>
        </tr>
        <tr>
            <td class="name1">店情報</td><td class="info" height="90px;">{{ $item->store_information}}
            </td>
        </tr>
        <tr>
        <td class="name2">紹介文</td><td class="info2" height="90px;">{{ $item->store_introduction}}</td>
        </tr>
        <tr>
        <td class="name3">アレルギー情報</td><td class="info3" height="70px;">{{ $item->allergies}}</td>
        </tr>
        <tr>
        <td class="name4">地方</td><td class="info4" height="45px;">{{ $item->rural_code}}</td>
        </tr>
        <tr>
        <td class="name5">エリア</td><td class="info5" height="45px;">{{ $item->area}}</td>
        </tr>
        <tr>
        <td class="name6">宗教情報</td><td class="info6" height="70px;">{{ $item->religion}}</td>
        </tr>
        <tr>
        <td class="name7">リンク</td><td class="info7" height="45px;"><a href="{{ $item->url}}">{{ $item->url}}</a></td>
        </tr>
        <td class="name8">住所</td><td class="info8" height="45px;">{{ $item->street_address}}</td>
        <tr>
        <td class="name9">写真</td><td>{{ $item->photo_pass}}</td>
        </tr>
    </table><br>
    @endforeach
@endsection

@section('content4')
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="menu-drawer">
      <input type="checkbox" id="chk" />
      <label class="btn" for="chk"></label>
      <label class="other" for="chk"></label>
      <div class="content">
        <h2><i class="fas fa-list-ul"></i>メニュー</h2>
        <div class="menu">
          <a href="http://localhost:8000/"><i class="fas fa-microphone-alt">
          </i>言語を変更する</a>
          <a href="http://localhost:8000/"><i class="fas fa-envelope">
          </i>Q&A</a>
          <a href="http://localhost:8000/"><i class="fas fa-phone">
          </i>お問い合わせ</a>
        </div>
      </div>
    </div>
  </header>
</body>