<html>
  <head>
    <title>@yield('title')</title>
    <style>
div {
  margin: 120px 0;
  text-align: center;
}
p {
  font-family: Meiryo, "Hiragino Kaku Gothic Pro W3", Courier New, sans-serif;
  line-height: 1.5;
  margin-bottom: 25px;
  color: #fff;
}

      body {<font-size:160pt; color:#000000; margin: 5px; }
      h1 { font-size:50pt; text-align:center; color:#00FA9A;
          margin:-150px 0px -30px 0px; letter-spacing:-4pt; }
      .menutitle {font-size:14pt; font-weight:bold;
                  text-align:center; margin: 0px; }
      .content {margin:100px 0px -30px 0px; text-align:center;}
      td {border: solid 0px #aaa; color:#999; padding:5px 10px;}
      p {color:#999; text-align:center;}
      table {margin-left: auto; margin-right: auto; font-size:10pt;}
      .touroku {font-size: 1.2em;
font-weight: bold;
padding: 15px 30px;
color: #fff;
border-style: none;
box-shadow: 2px 2px 3px 1px #666;
-moz-box-shadow: 2px 2px 3px 1px #666;
-webkit-box-shadow: 2px 2px 3px 1px #666;
text-shadow: 1px 1px 2px #000;
background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));
-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    width:200px;
height:80px;
margin: 30px 0px 0px 666px;
font-size:45px;
      }
.touroku:hover{
    opacity: 0.8;
}
.textbox{margin:30px 30px 30px 30px;}
body{background-image:linear-gradient(-45deg, #dfdfdf 25%, #f9f8f7 25%, #f9f8f7 50%, #dfdfdf  50%, #dfdfdf 75%, #f9f8f7 75%, #f9f8f7)};

h1 {
    color: #fff;
    font-family: 'Oswald', sans-serif;
    font-size: 60px;
    font-weight: 700;
    }

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
    .content2{margin:-82px 0px 0px 146px;
      text-align:center;
              }
    .content3{margin:-145px 400px 100px 0px;
            font-weight:bold;
            font-size: 37px;}
    .content1{
      margin:40px 0px 0px 146px;
   
    }
    .content4{
      margin:90px 0px 0px 150px; 
    }
    .content5{margin:-739px 450px 100px 0px;
            font-weight:bold;
            font-size: 37px;
            }
    .content6{font-weight:bold;
            font-size: 37px;
            margin:-72px 70px 0px 0px;}

    .disp-img2{
    background-image:url(../images/Go-back_3672.png);             
    background-repeat:  no-repeat;                              
    width:65px;                                   
    height:70pX;
    align:left;
    object-fit: cover;
    margin: 10px 45px; 
    background-color: transparent;
    border-color: transparent;                                
}
.disp-img2:hover {
    backdrop-filter: blur(12px);
}
.shop{
  margin:60px 0px 0px 290px;
  font-size:40px
}
.photo{
  margin:25px 0px 0px 290px;
}
.url{
  margin:25px 0px 0px 290px;
}

.information{
  margin:20px 0px 0px 290px;
}

.information2{
  margin:20px 0px 0px 290px;
}

.information3{
  margin:20px 0px 0px 290px;
}

.information4{
  margin:20px 0px 0px 290px;
}
.outer{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner{
  position: absolute;
 margin:200px 0px 0px 450px
}
.outer2{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner2{
  position: absolute;
 margin:265px 0px 0px 450px
}
.outer3{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner3{
  position: absolute;
 margin:420px 0px 0px 450px
}
.outer4{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner4{
  position: absolute;
 margin:495px 0px 0px 450px
}
.outer5{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner5{
  position: absolute;
 margin:553px 0px 0px 450px
}
.outer6{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner6{
  position: absolute;
 margin:610px 0px 0px 450px
}
.outer7{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner7{
  position: absolute;
 margin:667px 0px 0px 450px
}
.outer8{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner8{
  position: absolute;
 margin:717px 0px 0px 450px
}
.outer9{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner9{
  position: absolute;
 margin:768px 0px 0px 450px
}
.outer10{
  font-size: 37px;
  position: relative;
  font-weight:bold;
}
.inner10{
  position: absolute;
 margin:335px 0px 0px 450px
}
    
    </style>
  </head>
<body>
<h1 aria-label="CodePen">
    <span data-text="登">登</span>
    <span data-text="録">録</span>
    <span data-text="情">情</span>
    <span data-text="報">報</span>
  </h1>
  <div class="content4">
  @yield('content4')</div>
  <div class="content1">
  @yield('content1')</div>
  <div class="content2">
  @yield('content2')</div>
  <div class="content6">
  @yield('content6')</div>
  <div class="content3">
  @yield('content3')</div>
  @section('menubar')
  <h2 class="menutitle"></h2>
  <div class="content">
  @yield('content')</div>
  <div class="content5">
  @yield('content5')</div>

</div>
</body>
</html>