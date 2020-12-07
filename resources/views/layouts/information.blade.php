<html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
    .disp-img2{
      background-image:url(../image/Go-back_3672.png);             
      background-repeat:  no-repeat;                              
      width:65px;                                   
      height:70pX;
      align:left;
      object-fit: cover;
      margin: 10px 400px; 
      background-color: transparent;
      border-color: transparent;                                
    }

    .disp-img2:hover {
        backdrop-filter: blur(12px);
    }

    input {margin: 10px 400px; width: 700px; height: 50px; font-size:20px;
      border-radius: 7px; padding: 0.2em; transition: 0.3s; letter-spacing: 2px;}
      input:focus{background: #F5F5F5;}
    ::placeholder {font-size: 1.5em;}
    .password {margin: 20px 400px; width:15%;}
    .password2 {margin: -70px 650px; width:15%;}
    
    h2 {margin: 10px 400px;}

    span.re {margin: 10px -230px;}
    span.pass {margin: 10px 400px;}
    span {margin: -10px -390px; font-size: 18px; font-weight: 700; }
    span.aa {margin: 10px 400px; font-size: 18px;}
    span.bb {margin: 10px 400px; font-size: 18px; font-weight: 700; }

    .button {
      display       : inline-block;
      border-radius : 20%;          /* 角丸       */
      font-size     : 18pt;        /* 文字サイズ */
      text-align    : center;      /* 文字位置   */
      cursor        : pointer;     /* カーソル   */
      padding       : 5px 5px;   /* 余白       */
      background    : #000066;     /* 背景色     */
      color         : #ffffff;     /* 文字色     */
      line-height   : 1em;         /* 1行の高さ  */
      transition    : .3s;         /* なめらか変化 */
      box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
      border        : 2px solid #000066;    /* 枠の指定 */
      width         : 100px;
      margin        : 10px 1000px;
    }
    .button:hover {
      box-shadow    : none;        /* カーソル時の影消去 */
      color         : #000066;     /* 背景色     */
      background    : #ffffff;     /* 文字色     */
    }

    .aa { background-color: red; color: white; border-radius: 5px;
    padding: 3px 3px;}

    textarea {margin: 10px 400px; width: 700px; border-radius: 7px;
    border-color: black;　padding: 0.9em; transition: 0.3s; letter-spacing: 2px;height: 100px; font-size:20px; border: 2px solid black;}
    textarea:focus {background: #F5F5F5;}

    .form-control { width: 120px; margin: 10px 400px -5px; border: 2px solid black;
      letter-spacing: 2px;}

    .form-control {position:relative;
	  border-radius: 7px;
	  background: #ffffff;
    }

    .form-control option:nth-child(2n+1) {
      background: lightgrey;
    }

    .out {margin: -10px 135px;}
</style>

</head>
<body>

<h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>