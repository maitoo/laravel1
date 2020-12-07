<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">

    
    <style>
    .content1{align:center; margin:30px 0 0 65px;}
    .content2{margin:0 100px 0 130px; font-size:30px;}
    .saikensaku {margin: -10px 0 0 0;}
    .sapporo {font-size: 50pt; margin:0 -100px 0 0;}
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

    body {font-size:16pt; color:black; margin: 0px; }
    h1{font-size:50pt; color:#999; text-align:center;
        margin:50px 0px -30px 0px; letter-spacing:-4pt; }
    h2 {font-size:30pt; text-align:center; color:white;
    margin:-40px 0px 30px 0px; letter-spacing:-4pt;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .title {font-size:14pt; font-weight:bold; margin:0; }
    .content {margin:50px; text-align:center;}
    .footer { text-align:right; font-size:10pt; margin:10px;
    border-bottom:solid 1px #ccc; color:#ccc; }
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
    table {border-collapse: collapse; width:1390px; text-align:center; margin:10px 8px 10px; table-layout: fixed;}
    table th, table td {border: solid 1px black;}*/
    .box1 {padding: 0.5em 0.5em ;margin: 0px 0px; width: auto;  border: solid 3px #000000; }
    .box1 p {margin: 0px 5px 0px -5px; padding: 0; width: auto 10;}
    
    .button_wrapper remodal-bg{font-size: 1.4em;
font-weight: bold;
padding: 10px 30px;
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
}
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

    html,
/*body {
  background-image:url(../image/tree.jpg);
  background-color: #85b9;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}*/
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

      .name {color:black; font-weight:bold; background-color:#48d1cc;}
      .name1{color:black; font-weight:bold; background-color:#48d1cc;}
      .name2{color:black; font-weight:bold; background-color:#48d1cc;}
      .name3{color:black; font-weight:bold; background-color:#48d1cc;}
      .name4{color:black; font-weight:bold; background-color:#48d1cc;}
      .name5{color:black; font-weight:bold; background-color:#48d1cc;}
      .name6{color:black; font-weight:bold; background-color:#48d1cc;}
      .name7{color:black; font-weight:bold; background-color:#48d1cc;}
      .name8{color:black; font-weight:bold; background-color:#48d1cc;}
      .name9 {color:black; font-weight:bold; background-color:#48d1cc;}
      .table-size{color:blue;}
      .infro{font-weight:bold;}
      .infro2{font-weight:bold;}
      .infro3{font-weight:bold;}
      .infro4{font-weight:bold;}
      .infro5{font-weight:bold;}
      .infro6{font-weight:bold;}
      .infro7{font-weight:bold;}
      .infro8{font-weight:bold;}
      
      
</style>

</div>
<body>  
    <h1>@yield('title')</h1>
    <h2>@yield('sub_title')</h2>
    <div class="content1">
        @yield('content1')</div>
    <div class="content2">
        @yield('content2')</div>
    <div class="content">
        @yield('content')</div>
</body>
</html>
