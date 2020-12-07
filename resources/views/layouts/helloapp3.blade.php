<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body {font-size:16pt; color:#999; margin: 5px; }
    h1 { font-size:50pt; text-align:right; color:#f6f6f6;
    margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
    ul { font-size:12pt; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    .content {margin:10px; }
    th {background-color:#999; color:fff; padding:5px 10px; }
    td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
    p{text-align:center; font-size:75pt; color:#000000; position: relative; 
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
input {font-size: 2em;
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
    margin:90px 30px 30px 30px; 
}
input:hover{
    opacity: 0.8;
}
.button_wrapper {text-align:center;}
.logout{
    text-align:right;
}
/*body {background-color: lightblue;}*/
body{
    background-image:url('../image/image2.jpg');
    }
.disp_img{
    background-repeat: no-repeat;
    width: auto;
    height: 65px;
    align: left;
    object-fit: cover;
    margin: 0px 0px 0px 0px;
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
</body>
</html>
