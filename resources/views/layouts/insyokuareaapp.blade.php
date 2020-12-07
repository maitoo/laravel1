<html>
  <head>
    <title>@yield('title')</title>
    <style>
      .hoteru{font-size:20pt; font-weight:bold;
      height: 20px; padding: 0 0 0 30px;} 
      .hoteru2{color:black; margin:0 95px 0 -30px; background-color:orange;}
      p{font-size: 20pt; margin: -15px 0 -15px 0}
      hr{margin: 20px 95px 0 -30px;}
      th{background-color:#999; color:#fff; padding:5px 10px;}
      td{border: solid 1px #aaa; color:#999; padding:5px 10px;}

      h1{font-size:40pt; color:#999; margin:10px 100px -20px 0;  }
      h2{font-size:20pt; color:skyblue; margin:25px 0px -20px 0px;}
      h3{font-size:20pt; margin:20px -100px 0 50px; }
      h4{font-size:20pt; color:blue; margin:10px 0 -20px 0;}
      h5{font-size:20pt; color:green; margin:10px 0 -20px 0;}
      h6{font-size:20pt; color:yellowgreen; margin:10px 0 -20px 0;}

      .kinki{font-size:20pt; font-weight:bold;} 
      .kinki2{color:yellow; margin:10px 0 -20px 0;}
      .tyuugoku{font-size:20pt; font-weight:bold;} 
      .sikoku{color:orange; margin:10px 0 -20px 0;}
      .kyuusyuu{font-size:20pt; font-weight:bold;} 
      .kyuusyuu2{color:red; margin:10px 0 -20px 0;}
      
      .content1{align:center; margin:30px 0 0 130px;}
      .content2{margin:30px 0 0 130px; font-size:100px;}
      .content3{align:center; margin:30px 0 0 130px;}
      .disp-img1{
        background-image:url(../image/hotel_porter_6808.png);
        background-repeat: no-repeat;
        width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px;
        background-color: transparent;
        border-color: transparent;
      }
      .disp-img2{
        background-image:url(../image/sushi2.jpg);
        background-repeat: no-repeat;
        width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px;
        background-color: transparent;
        border-color: transparent;
      }
      .disp-img3{
        background-image:url(../image/kankou.jpg);
        background-repeat: no-repeat;
        width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px;
        background-color: transparent;
        border-color: transparent;
      }
      .disp-img4{
        background-image:url(../image/unnamed.png);
        background-repeat: no-repeat;
        width:200px; height:150px; align:center;
        object-fit: cover; margin: 10px 45px;
        background-color: transparent;
        border-color: transparent;
      }
      .button{position:relative;}
      .button2{position:absolute; margin:0 0 0 160px;}
      .touroku{margin:-50px 0 0 1000px; padding: 15px 30px; width:100px;height:50px; font-weight: bold; font-size:10pt;}
      .disp-img0{
        background-image:url(../image/Go-back_3672.png);             
        background-repeat:  no-repeat;                              
        width:65px;                                   
        height:70pX;
        align:left;
        object-fit: cover;
        margin: 10px 45px; 
        background-color: transparent;
        border-color: transparent;                                
      }
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
      
    </style>
  </head>
<body>
  <div class="content1">
  @yield('content1')</div>
  <div class="content2">
  @yield('content2')</div>
  <div class="content3" >
  @yield('content3')</div>
  <div class="content4">
  @yield('content4')</div>
</form>
</body>
</html>