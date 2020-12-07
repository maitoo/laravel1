@extends('layouts.kekkaDBapp')
<style>
  .pagination { font-size:10pt; }
  .pagination li { display:inline-block }
</style>
<table class="migi">
<tr><th>検索</th><th>交通</th></tr>
<tr>
<td><INPUT border="1" type="button" onclick="" class="disp-img5"></td>
<td><INPUT border="1" type="button" onclick="" class="disp-img7"></td>
</tr>
</table>
<div class="title0" font-size="20px">
  <div class="title" font-size="20px">
    宿泊
  </div>
</div>

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
</form>
@endsection

@section('content2')
<div class="sen"><hr size="1"></div>
<p id="srchBrdCrmbs">
  <a href="http://localhost:8000/syukuhaku">北海道</a>
  &nbsp;>
  <span class="grpLocationLocus">
    <a href="http://localhost:8000/syukuhakuarea">札幌</a>
  </span>
  &nbsp;>&nbsp; 宿泊結果    
</p>
@endsection
@section('content3')
<div class="saikensaku">
<form action="/kensakuDB/keyword" method="get">
<input type="text"  style= "width:900px;height:50px;"; name="syukuhaku" placeholder="🔍再検索">
<tr><th></th><td>
      <input class="touroku" type="submit" value="検索"></td></tr>
</form>
</div>
<div class="sen"><hr size="1"></div>
<div class="sapporo">札幌</div>
@endsection
@section('content')
@foreach ($items as $item)
    <table border="5" class="table_size" >
    @csrf
        <tr>
            <td width="300px">{{ $item->photo_pass}}</td>
            <td width="160px">{{ $item->store_name}}</td>
            <td width="160px">{{ $item->store_information}}</td>
            <td width="100px">{{ $item->store_introduction}}</td>
            <td>{{ $item->allergies}}</td>
            <td>{{ $item->store_stype}}</td>
            <td width="100px">{{ $item->rural_code}}</td>
            <td>{{ $item->area}}</td>
            <td>{{ $item->religion}}</td>
            <td width="300px"><a href="{{ $item->url}}">{{ $item->url}}</a></td>
            <td>{{ $item->street_address}}</td>
            
        </tr>
    </table>
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