<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
    <style>
    body {font-size:16pt; color:#999; margin: 5px; }
    h1 { font-size:50pt; text-align:right; color:#f6f6f6;
    margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
    ul { font-size:12pt; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    th {background-color:#999; color:fff; padding:5px 10px; }
    td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
    p.text_center{text-align:center;
      font-size:100pt;
      color:#000000;
      position: relative;
      top:-60px;
    }
    p:after {
        top: -20px;
    
     
/*background: #dfefff;
  box-shadow: 0px 0px 0px 5px #dfefff;
  border: dashed 2px white;
  padding: 0.2em 0.5em;
  color: #454545;}
p:after {
  position: absolute;
  content: '';
  left: -7px;
  top: -7px;
  border-width: 0 0 15px 15px;
  border-style: solid;
  border-color: #fff #fff #a8d4ff;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15);*/
}
.content3{
    margin: 0px 50px 0px 0px;
}
.click {font-size: 2em;
font-weight: bold;
/*padding: 10px 30px;*/
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
    width:350;
    height:130;
    margin:0px 30px 30px 0px; 
}
.click:hover{
    opacity: 0.8;
}
.button_wrapper {text-align:center;}

.logout{
    text-align:center;
    margin: 0 0 0 0px;
}

body{
    background-image:url('../image/image2.jpg');
    }
    .disp-img2{
    background-image:url('../image/Go-back_3672.png');             
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
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <ul>
        <li>@show</li>
    </ul>
    <div class="content">
        @yield('content')
    </div>
    <div class="content2">
        @yield('content2')
    </div>
</body>
</html>
