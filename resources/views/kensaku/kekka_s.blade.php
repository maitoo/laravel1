@extends('layouts.kekka_sapp')
<link href='https://fonts.googleapis.com/css?family=Noto+Serif+JP' rel="stylesheet">
<style>
  .pagination { font-size:15pt; margin:0 0 0 550px;}
  .pagination li { display:inline-block }
</style>

<div class="title0" font-size="20px">
  <div class="title" font-size="20px">
    宿泊
  </div>
</div>

@section('content2')
<div class="sen"><hr size="1"></div>
<p id="srchBrdCrmbs">
  <a href="/syukuhaku">北海道</a>
  &nbsp;>
  <span class="grpLocationLocus">
    <a href="/syukuhakuarea">札幌</a>
  </span>
  &nbsp;>&nbsp; 宿泊結果    
</p>
@endsection
@section('content3')
<link href='https://fonts.googleapis.com/css?family=Noto+Serif+JP' rel="stylesheet">
<div class="saikensaku">
<input type="text"  style= "width:900px;height:50px;" name="syukuhaku" placeholder="🔍再検索">

<input  class="btn-square-slant" type="submit" value="検索"></input>
</div>
<div class="sen"><hr size="1"></div>
<div class="balloon3">札幌</div>

@endsection
@section('content')
@foreach ($items as $item)
    <table border="2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho">
    @csrf
        <tr>
          <td rowspan="10" style="border-right-style: hidden;"><img src="{{ $item->photo_pass}}" width="500" height="400" align="center"></td>
        </tr>
        <tr>
          <td  height="100px;" 
          style="border-top-color: black; color:red; font-size: 100px;" align="left" >
          {{ $item->store_name}}</td>
        </tr>
        <tr>
          <td class="info4" height="45px;" style="border-top-style: hidden; color:skyblue; font-size: 30px;" align="left">{{ $item->rural_code}} 
          {{ $item->area}}</td>
        </tr>
        <tr>
        <td class="info" height="90px;" style="border-top-style: hidden;"align="left">{{ $item->store_information}}
          </td>
        </tr>
        <tr>
          <td class="info3" height="70px;" style="border-top-style: hidden;" align="left">{{ $item->allergies}}</td>
        </tr>
        <tr>  
          <td class="info6" height="70px;" style="border-top-style: hidden;" align="left">{{ $item->religion}}</td>
        </tr>
        <tr>
          <td class="info8" height="45px;" style="border-top-style: hidden;" align="left">{{ $item->street_address}}</td>
        </tr>
          <td class="info7" height="45px;" style="border-top-style: hidden;" align="left"><a href="{{ $item->url}}">{{ $item->url}}</a></td>
        <tr>
          <td class="info2" height="90px;" style="border-bottom-color: black;border-top-style: hidden;" align="left">{{ $item->store_introduction}}</td>
        </tr>
        <div class=pagi>
          {{  $items->links() }}
        </div>
    </table>
    @endforeach
@endsection

@section('content5')
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
          <a href="http://localhost:8000/user_q"><i class="fas fa-envelope">
          </i>Q&A</a>
          <a href="http://localhost:8000/form"><i class="fas fa-phone">
          </i>お問い合わせ</a>
        </div>
      </div>
    </div>
  </header>
</body>
@endsection
@section('content4')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<div class="menyu1">
  <div class="menyu2">
	  <a class="active" href="./syukuhaku">SYUKUHAKU 🏨</a></li>
	  <a href="./insyoku">INSYOKU 🍜</a></li>
	  <a href="./kankou">KANKOU 🗼</a></li>
	  <a href="./Free">FREE (`･ω･´)b</a></li>
  </div>
</div>
