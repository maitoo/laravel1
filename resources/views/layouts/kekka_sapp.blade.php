<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
    <style> 
   /*HTML {
  height: 100%;
  }
BODY {
  background: linear-gradient( 90deg,
      rgba(255, 225, 132, .7) 50%, rgba(255,255,255, 0) 50%),
    linear-gradient( 90deg,
      rgba(32, 113, 120, .3) 50%, rgba(255,255,255, 0) 50%),
    linear-gradient( 90deg,
      rgba(255, 150, 102, .3) 50%, rgba(255,255,255, 0) 50%),
    linear-gradient( 90deg,
      rgba(23, 76, 79, .1) 50%, rgba(255,255,255, 0) 50%);
  background-size: 7em 7em, 5em 5em, 3em 3em, 1em 1em;
  background-color: #F5E9BE;
  font: 10px/1.4 'Trebuchet MS', Verdana, sans-serif;
  }*/
  body{ background:radial-gradient(#FFFFFF, #FFD5EC); }
    .title0{text-align:center; font-family: 'Noto Serif JP', sans-serif;}
    .title{font-size:50pt;}
    .content1{align:center; margin:30px 0 0 65px;}
    .content2{margin:0px 100px -20px 130px; font-size:20px;}
    .content3{align:center; margin:50px 100px 0 130px;}
    .saikensaku {margin: -10px 0 0 0; }
    .sen{margin: 0 -130px;}
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
  background: #70a6ff;
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
  border-top: 15px solid #70a6ff;
  z-index: 0;
}

  
    .button{position:relative;}
    .button2{position:absolute; margin:0 0 0 160px;}
    .disp-img1{background-image:url(../image/hotel_porter_6808.png);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img2{background-image:url(../image/sushi2.jpg);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img3{background-image:url(../image/kankou.jpg);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img4{background-image:url(../image/unnamed.png);
        background-repeat: no-repeat; width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img5{background-image:url(../image/kensaku.png);
        background-repeat: no-repeat; width:65px; height:65px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img6{background-image:url(../image/settei.jpg);
        background-repeat: no-repeat; width:65px; height:65px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .disp-img7{background-image:url(../image/koutuu.png);
        background-repeat: no-repeat; width:65px; height:65px; align:center;
        object-fit: cover; margin: 10px 45px; background-color: transparent;
        border-color: transparent;}
      .migi{margin:0 0 0 1100px; width:350px}

    /*body {font-size:16pt; color:black; margin: 0px; }*/
    h1{font-size:50pt; color:#999; text-align:center;
        margin:50px 0px -30px 0px; letter-spacing:-4pt; }
    h2 {font-size:30pt; text-align:center; color:white;
    margin:-40px 0px 30px 0px; letter-spacing:-4pt;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; background-color:#AAAAAA;}
    .content {margin:50px; text-align:center;}
   
.button_wrapper remodal-bg:hover{
    opacity: 0.8;
    background-color:blue;
}
.disp-img{
    background-image:url(../image/Go-back_3672.png);             
    background-repeat:  no-repeat;                              
    width:auto;                                   
    height:65pX;
    align:left;
    object-fit: cover;
    margin: 10px 45px;                                  
}
/*.disp-img2{
    background-image:url(../image/Go-back_3672.png);             
    background-repeat:  no-repeat;                              
    width:65px;                                   
    height:70pX;
    align:left;
    object-fit: cover;
    margin: 10px 45px; 
    background-color: transparent;
    border-color: transparent;                                
}*/
.disp-img2:hover {
    backdrop-filter: blur(12px);
}
    .buttom {background-image:url(../image/Go-back_3672.png);             
    background-repeat:  no-repeat; 
    width:auto;                                   
    height:65pX;
    align:left;
    object-fit: cover;
    margin: 0 45px;   }
    a {align: right;}
    p {margin: 10px;}
    .submit {text-align: right; margin:-60px 90px;}
    .a {width: 300px;}
    .text {width: 1000px; align:left;}
    

    h1 span {
    display: inline-block;
    position: relative;
    transform-style: preserve-3d;
    perspective: 500px;
    -webkit-font-smoothing: antialiased;
    }

    h1 span::before,
    h1 span::after {
    display: none;
    position: absolute;
    top: 0;
    left: -1px;
    transform-origin: left top;
    transition: all ease-out .3s;
    content: attr(data-text);
    }

    h1 span::before {
    z-index: 1;
    color: rgba(0,0,0,0.2);
    transform: scale(1.1,1) skew(0deg,20deg);
    }

    h1 span::after {
    z-index: 2;
    color: #3498db;
    text-shadow: -1px 0 1px #3498db,
                    1px 0 1px #fff;
    transform: rotateY(-40deg);
    }

    h1 span:hover::before { transform: scale(1.1,1) skew(0deg,5deg); }

    h1 span:hover::after { transform: rotateY(-10deg); }

    h1 span + span { margin-left: .3em; }

    @media (min-width: 20em) {
    h1 { font-size: 2em; }

    h1 span::before,
    h1 span::after {
        display: block;
    }
    }

    @media (min-width: 30em) {
    h1 { font-size: 100px; }
    }

    @media (min-width: 40em) {
    h1 { font-size: 100px; }
    }

    @media (min-width: 60em) {
    h1 { font-size: 100px; }
    }
    input.kaitou {
        width: 90%;
        align: center;
    }


.ab{font-size:20pt; font-weight:bold;
      height: 20px; padding: 0 0 0 30px;} 
.abc{text-align:right}

.menu-drawer .btn {font-size: 27px; background: #fff; width: 70px;  
padding: 4px 0; cursor: pointer; text-align: center; top: 0; right: 0; }
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

      .store{width:1000px;}
      .name {color:red; ;}
      
      tr {margin:0 0 0 0;}
    th { color:#fff;  }
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
    
    table {border-collapse: collapse; width:1390px; text-align:center; margin:10px 8px 10px; table-layout: fixed;  background: linear-gradient(#FFFFCC, #FFFFFF ) fixed; font-family: 'Sawarabi Mincho', sans-serif;}

    table td table th{border: solid 1px black; padding:10px 10px 10px 0;}
    .touroku{margin:-50px 0 0 100px; padding: 15px 30px; width:100px;
      height:50px; font-weight: bold; font-size:10pt;}

    .pagi{margin:0 50px 30px 0px;}

    .name1_1{margin:0 0 0 0;}
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

  </style>
  <body>
    <div class="content4">
        @yield('content4')</div>
    <div class="content1">
        @yield('content1')</div>
    <div class="content2">
        @yield('content2')</div>
    <div class="content3">
        @yield('content3')</div>
    <div class="content">
        @yield('content')</div>
    <div class="content5">
        @yield('content5')</div>
</body>
</html>
