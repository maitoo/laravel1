<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <style>
    /*タイトル*/
    .title0{text-align:center; font-family: 'Noto Serif JP', sans-serif;}
    .title{font-size:50pt;}

    /*全体画面*/
    body{ background:radial-gradient(#FFFFFF, #FFD5EC); }

    /*見出し*/
    p{font-size: 20pt; margin:20px 0 0 0;}

    /*線*/
    hr{margin: 20px 95px 0 -30px;}

    /*テーブルの見出し*/
    th{background-color:#999; color:#fff; padding:5px 10px;}

    /*テーブルの中身*/
    td{border: solid 1px #aaa; color:#999; padding:5px 10px;}

.center {
  position: absolute;
  display: inline-block;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
}

/** Custom Select **/
.custom-select-wrapper {
  position: relative;
  display: inline-block;
  user-select: none;
}
  .custom-select-wrapper select {
    display: none;
  }
  .custom-select {
    position: relative;
    display: inline-block;
  }
    .custom-select-trigger {
      position: relative;
      display: block;
      width: 130px;
      padding: 0 84px 0 22px;
      font-size: 22px;
      font-weight: 300;
      color: #fff;
      line-height: 60px;
      background: #5c9cd8;
      border-radius: 4px;
      cursor: pointer;
    }
      .custom-select-trigger:after {
        position: absolute;
        display: block;
        content: '';
        width: 10px; height: 10px;
        top: 50%; right: 25px;
        margin-top: -3px;
        border-bottom: 1px solid #fff;
        border-right: 1px solid #fff;
        transform: rotate(45deg) translateY(-50%);
        transition: all .4s ease-in-out;
        transform-origin: 50% 0;
      }
      .custom-select.opened .custom-select-trigger:after {
        margin-top: 3px;
        transform: rotate(-135deg) translateY(-50%);
      }
  .custom-options {
    position: absolute;
    display: block;
    top: 100%; left: 0; right: 0;
    min-width: 100%;
    margin: 15px 0;
    border: 1px solid #b5b5b5;
    border-radius: 4px;
    box-sizing: border-box;
    box-shadow: 0 2px 1px rgba(0,0,0,.07);
    background: #fff;
    transition: all .4s ease-in-out;
    
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: translateY(-15px);
  }
  .custom-select.opened .custom-options {
    opacity: 1;
    visibility: visible;
    pointer-events: all;
    transform: translateY(0);
  }
    .custom-options:before {
      position: absolute;
      display: block;
      content: '';
      bottom: 100%; right: 25px;
      width: 7px; height: 7px;
      margin-bottom: -4px;
      border-top: 1px solid #b5b5b5;
      border-left: 1px solid #b5b5b5;
      background: #fff;
      transform: rotate(45deg);
      transition: all .4s ease-in-out;
    }
    .option-hover:before {
      background: #f9f9f9;
    }
    .custom-option {
      position: relative;
      display: block;
      padding: 0 22px;
      border-bottom: 1px solid #b5b5b5;
      font-size: 18px;
      font-weight: 600;
      color: #b5b5b5;
      line-height: 47px;
      cursor: pointer;
      transition: all .4s ease-in-out;
    }
    .custom-option:first-of-type {
      border-radius: 4px 4px 0 0;
    }
    .custom-option:last-of-type {
      border-bottom: 0;
      border-radius: 0 0 4px 4px;
    }
    .custom-option:hover,
    .custom-option.selection {
      background: #f9f9f9;
    }
    /*テーブル全体*/
    table {border-collapse: collapse; width:1300px; text-align:center; margin:80px 8px 10px -20px; table-layout: fixed;  background: linear-gradient(#FFFFCC, #FFFFFF ) fixed; font-family: 'Sawarabi Mincho', sans-serif;}

    /*小見出し*/
      h1{font-size:50pt; color:#999; text-align:center;
        margin:50px 0px -30px 0px; letter-spacing:-4pt; }
      h2{font-size:20pt; color:purple; margin:10px 0 -10px 0;}
      h3{font-size:30pt; margin:20px 0 20px 300px;}
      h4{font-size:20pt; color:blue; margin:10px 0 -10px 0;}
      h5{font-size:20pt; color:green; margin:10px 0 -10px 0;}
      h6{font-size:20pt; color:yellowgreen; margin:10px 0 -10px 0;}
      .kinki{font-size:20pt; font-weight:bold;} 
      .kinki2{color:yellow; margin:10px 0 -10px 0;}
      .tyuugoku{font-size:20pt; font-weight:bold;} 
      .sikoku{color:orange; margin:10px 0 -10px 0;}
      .kyuusyuu{font-size:20pt; font-weight:bold;} 
      .kyuusyuu2{color:red; margin:10px 0 -10px 0;}
    
      .content1{align:center; margin:30px 0 0 130px;}
      .content2{margin:30px 0 0 130px;  resize: none;}
      .content3{align:center; margin:30px 0 0 130px;}
    /*写真*/
      .disp-img1{background-image:url(../image/hokkaidou.png);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 20px 0 0 -20px;  background-color:transparent; border-color: transparent;}
      .disp-img2{background-image:url(../image/touhoku.jpg);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img3{background-image:url(../image/kantou.jpg);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img4{background-image:url(../image/tyuubu.png);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img5{background-image:url(../image/kinki.png);
        background-repeat: no-repeat; width:65px; height:65px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img6{background-image:url(../image/tyuugoku.jpg);
        background-repeat: no-repeat; width:65px; height:65px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img7{background-image:url(../image/kyuusyuu.png);
        background-repeat: no-repeat; width:65px; height:65px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      
/*風船見出し*/
        .balloon3 { position: relative;
  display: inline-block;
  margin: 15px 0 -60px 0;
  padding: 0 5px;
  width: 175px;
  height: 175px;
  line-height: 175px;
  text-align: center;
  color: #FFF;
  font-size: 40px;
  font-weight: bold;
  background: #FF5192;
  border-radius: 50%;
  box-sizing: border-box;
      font-family: 'Noto Serif JP', sans-serif;}

      .balloon3:before {
  content: "";
  position: absolute;
  bottom: -25px;
  left: 50%;
  margin-left: -15px;
  border: 15px solid transparent;
  border-top: 15px solid #FF5192;
  z-index: 0;
}

      /*.button{position:relative;}
      .button2{position:absolute; margin:0 0 0 160px;}
      .touroku{margin:-50px 0 0 100px; padding: 15px 30px; width:100px;
      height:50px; font-weight: bold; font-size:10pt;}*/
      
      /*ドロワーメニュー*/
      .menu-drawer .btn {font-size: 27px; background: #fff; width: 40px;padding: 4px 0; cursor: pointer; text-align: center; top: 0; right: 0;}
      .menu-drawer .btn::before, .menu-drawer .btn::after {font-family: "Font Awesome 5 Free"; font-weight: 900;}
      .menu-drawer .btn::before {content: "\f0c9";}
      .menu-drawer .btn::after {content: "\f00d";}
      .menu-drawer .other {background: rgba(0, 0, 0, 0.2); top: 0; left: 0;width: 100%; height: 100vh;}
      .menu-drawer .content {display: table; border: 1px solid #ebebeb;border-radius: 4px; background: #fff; width: 90vw; top: 34px; right: 0;text-align: center;}
      @media screen and (min-width: 415px) {
        .menu-drawer .content {width: 350px;}
      }
      .menu-drawer .content h2 {font-size: 16px; font-weight: 700; color: #fff;background: #383838; margin: 0; padding: .7em; border-radius: 4px 4px 0 0;}
      .menu-drawer .content h2 i {color: #383838; background: #fff;border-radius: 50%; padding: .4em; margin-right: .5em;}
      .menu-drawer .content .menu {height: 210px; overflow-y: auto;}
      .menu-drawer .content a {border-bottom: 1px solid #ebebeb; padding: 1rem 0 0 0; text-decoration: none; color: #858585; display: block; width: 100%;display: flex; flex-flow: column;}
      .menu-drawer .content a i {font-size: 27px;}
      .menu-drawer .content p {color: #858585;}
      .menu-drawer .btn,
      .menu-drawer .content,
      .menu-drawer .other {position: fixed;}
      .menu-drawer .btn,
      .menu-drawer .content {z-index: 1001;}
      .menu-drawer .other {z-index: 1000;}

      .menu-drawer #chk {display: none;}
      .menu-drawer #chk ~ .btn::before {display: block;}
      .menu-drawer #chk ~ .btn::after {display: none;}
      .menu-drawer #chk ~ .other {display: none;}
      .menu-drawer #chk:checked ~ .btn::before {display: none;}
      .menu-drawer #chk:checked ~ .btn::after {display: block;}
      .menu-drawer #chk:checked ~ .other {display: block;}

      .menu-drawer #chk ~ .content {transform: translate(350%, 0); transition: transform 0.3s ease-in-out;}
      .menu-drawer #chk:checked ~ .content {transform: none;}
/*メニューバー*/
.menyu1 {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #1b2538;
}
.menyu2 {
	float: left;
	border-right: 1px solid #bbbbbb;
  margin:0 0 0 220px;
  font-family: 'Kaushan Script', cursive;
}
.menyu2 a {
	display: inline-block;
	color: white;
	text-align: center;
  margin: 0 50px 0 60px;
	padding: 20px 20px 20px 25px;
	text-decoration: none;
}
.menyu2:last-child {
	border-right: none;
}
.menyu2 a:hover:not(.active) {
	background-color: #a9bce2;
}
.active {
	background-color: #da3c41;
  transition: background-color 2s linear;
}
/*検索ボタン*/
.btn-square-slant {
  margin: 0 0 0 50px;
  display: inline-block;
  position: relative;
  padding: 0.5em 1.4em;
  text-decoration: none;
  background: #668ad8;/*ボタン色*/
  color: #FFF;
  border-bottom: solid 5px #36528c;/*ボタン色より暗めに*/
  border-right: solid 5px #5375bd;/*ボタン色より暗めに*/
}

.btn-square-slant:before {  
  content: " ";
  position: absolute;
  bottom: -5px;
  left: -1px;
  width: 0;
  height: 0;
  border-width: 0 6px 6px 0px;
  border-style: solid;
  border-color: transparent;
  border-bottom-color: #FFF;
}

.btn-square-slant:after {  
  content: " ";
  position: absolute;
  top: -1px;
  right: -5px;
  width: 0;
  height: 0;
  border-width: 0px 6px 6px 0px;
  border-style: solid;
  border-color: #FFF; 
  border-bottom-color: transparent;
}

.btn-square-slant:active {
  /*ボタンを押したとき*/
  border:none;
  -webkit-transform: translate(6px,6px);
  transform: translate(6px,6px);
}

.btn-square-slant:active:after, .btn-square-slant:active:before {
  content: none;/*ボタンを押すと線が消える*/
}

/* 日本地図DOM */
.japan_map{
    position: relative;
    box-sizing: border-box;
    margin: 0 auto;
    display: table;
    background-color: #adf6ff;
}
/* 日本地図画像（スマホ対応用） */
.japan_map img{
    max-width: 100%;
    height: auto;
    border: 0;
    -webkit-backface-visibility: hidden;
}
/* 日本地図ボタン */
.japan_map .area_btn{
    position: absolute;
    z-index: 1;
    box-sizing: border-box;
    cursor: pointer;
    border: 3px solid #333333;
    border-radius: 5px;
    background-color: #FFF;
    padding: 0.2em auto;
    font-weight: bold;
    text-align: center;
    white-space: nowrap;
}

/* ボタン配置（使用する日本地図画像により微調整） */
.japan_map .area_btn.area1{
    top: 30%;
    right: 0;
    width: 30%;
}
.japan_map .area_btn.area2{
    top: 58%;
    right: 11%;
    width: 13%;
}
.japan_map .area_btn.area3{
    top: 56%;
    right: 27.5%;
    width: 13%;
}
.japan_map .area_btn.area4{
    top: 65%;
    right: 44%;
    width: 13%;
}
.japan_map .area_btn.area5{
    top: 52%;
    left: 20%;
    width: 25%;
}
.japan_map .area_btn.area6{
    top: 70%;
    left: 0;
    width: 25%;
}
/* オーバーレイ */
.japan_map .area_overlay{
    display: none;
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    background-color: #111;
    opacity: 0.5;
    cursor: pointer;
}

/* 選択前は表示を隠す */
.japan_map .pref_area{
    display: none;
}

/* 地域毎の都道府県リスト */
.japan_map .pref_list{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    -webkit-transform: translateY(-50%) translateX(-50%);
    z-index: 3;
    box-sizing: border-box;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 90%;
    background-color: #FFF;
}
.japan_map .pref_list > div{
    box-sizing: border-box;
    width: 50%;
    border: 1px solid #CCC;
    font-weight: bold;
    text-align: center;
    padding: 0.5em;
    cursor: pointer;
}

@media screen and (max-width: 480px){
    /* スマホユーザー向けにボタン文字サイズを調整 */
    .japan_map .area_btn{
        font-size: 4vw;
    }
}
    </style>
  </head>
<body>
  <h2>@yield('h2')</h2>
  <div class="content1">
    @yield('content1')</div>
  <div class="content2">
    @yield('content2')</div>
  <div class="content3" >
    @yield('content3')</div>
  <div class="content4" >
    @yield('content4')</div>
  <div class="content5">
    @yield('content5')</div>


</form>
</div>
</body>
</html>