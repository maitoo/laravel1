@extends('layouts.kankouapp')
<table class="migi">
<tr><th>検索</th><th>交通</th><th>設定</th></tr>
<tr>
<td><INPUT border="1" type="button" onclick="" class="disp-img5"></td>
<td><INPUT border="1" type="button" onclick="" class="disp-img6"></td>
<td><INPUT border="1" type="button" onclick="" class="disp-img7"></td>
</tr>
</table>
@section('title', '観光')

@section('content1')
<table>
<tr><th>宿泊</th><th>飲食</th><th>観光</th><th>Free</th></tr>
<form action="/kankou" method="post">
<tr>
  <td><INPUT border="1" type="button" onclick="location.href='./syukuhaku'" class="disp-img1"></td>
  <td><INPUT border="1" type="button" onclick="location.href='./insyoku'" class="disp-img2"></td>
  <td><INPUT border="1" type="button" onclick="location.href='./kankou'" class="disp-img3"></td>
  <td><INPUT border="1" type="button" onclick="location.href='./free'" class="disp-img4"></td>
  </tr>
  </table>
  <hr size="1">
  <p>店名・キーワードから検索</p>
  <hr size="1">
  </form>
@endsection
@section('content2')
<form action="/kankou/keyword" method="get">
@csrf
<input type="text"  style= "width:900px;height:50px"; name="kankou" placeholder="       🔍建造物等を入力">
<tr><th></th><td>
      <input class="touroku" type="submit" value="検索"></td></tr>
</form>
@endsection

@section('content3')
<hr size="1">
<p>地方エリアから探す</p>

<hr size="1">
<hr size="1">

    <h2>北海道地方</h2>

    <hr size="1">

    <h3><input type="submit" value="北海道" onclick="location.href='./kankouarea'"
      style= "width:200px;height:50px;font-size:20;"></input></h3>

    <hr size="1">

    <h4>東北地方</h4>

    <hr size="1">

    <h3><input type="submit" value="青森県" 
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="岩手県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="宮城県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="秋田県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="山形県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="福島県"
      style= "width:200px;height:50px;font-size:20;"></h3>

    <hr size="1">

    <h5>関東地方</h5>

    <hr size="1">
    
    <h3><input type="submit" value="茨城県" 
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="栃木県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="群馬県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="埼玉県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="千葉県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="東京都"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="神奈川県"
      style= "width:200px;height:50px;font-size:20;"></h3>

    <hr size="1">

    <h6>中部地方</h6>

    <hr size="1">

    <h3><input type="submit" value="新潟県" 
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="富山県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="石川県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="福井県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="山梨県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="長野県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="岐阜県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="静岡県"
      style= "width:200px;height:50px;font-size:20;">  
    <input type="submit" value="愛知県"
      style= "width:200px;height:50px;font-size:20;"></h3>

    <hr size="1">

    <div class="kinki">
      <div class="kinki2">
        近畿地方
      </div>
    </div>

    <hr size="1">

    <h3><input type="submit" value="三重県" 
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="滋賀県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="京都府"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="大阪府"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="兵庫県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="奈良県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="和歌山県"
      style= "width:200px;height:50px;font-size:20;"></h3>
    
    <hr size="1">

  <div class="tyuugoku">
    <div class="sikoku">
      中国・四国地方
    </div>
  </div>

    <hr size="1">

    <h3><input type="submit" value="鳥取県" 
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="島根県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="岡山県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="広島県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="山口県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="徳島県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="香川県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="愛媛県"
      style= "width:200px;height:50px;font-size:20;">  
    <input type="submit" value="高知県"
      style= "width:200px;height:50px;font-size:20;"></h3>

      <hr size="1">

  <div class="kyuusyuu">
    <div class="kyuusyuu2">
        九州・沖縄地方
    </div>
  </div>

      <hr size="1">
        
    <h3><input type="submit" value="福岡県" 
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="佐賀県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="長崎県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="熊本県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="大分県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="宮崎県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="鹿児島県"
      style= "width:200px;height:50px;font-size:20;">
    <input type="submit" value="沖縄県"
      style= "width:200px;height:50px;font-size:20;"></h3>

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
@endsection