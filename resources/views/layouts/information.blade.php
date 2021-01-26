<html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

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
    span {margin: -10px -390px; font-size: 18px; font-weight: 700; color: black;}
    span.aa {margin: 10px 400px; font-size: 18px;}
    span.bb {margin: 10px 400px; font-size: 18px; font-weight: 700; }
    span.cc {margin: 10px 10px; font-size: 18px; font-weight: 700; }
    span.dd {margin: 10px 400px; font-size: 18px; font-weight: 700; }

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

    .parent { width: 120px; margin: 10px 400px -5px; border: 2px solid black;
      letter-spacing: 2px;}

    .parent {position:relative;
	  border-radius: 7px;
	  background: #ffffff;
    }

    .parent option:nth-child(2n+1) {
      background: lightgrey;
    }

    .children { width: 120px; margin: 10px 418px -5px; border: 2px solid black;
      letter-spacing: 2px;}

    .children {position:relative;
	  border-radius: 7px;
	  background: #ffffff;
    }

    .children option:nth-child(2n+1) {
      background: lightgrey;
    }

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

    p.error { margin: 10px 400px; font-size: 20px; color: red;}

    span.error { margin: 10px 410px; font-size: 18px; color: #DD0000;}
    span.error2 { margin: 10px -380px; font-size: 18px; color: #DD0000;}
    span.error3 { margin: 10px 20px; font-size: 18px; color: #DD0000;}
    
    span.emessage {margin: 10px 10px; font-size: 18px; color: red;}
    span.emessage2 {margin: 10px -400px; font-size: 18px; color: red;}
    span.emessage3 {margin: 10px 390px; font-size: 18px; color: red;}
    span.emessage4 {margin: 10px -10px; font-size: 18px; color: red;}
    
    
    table.table_align {margin: 100px 100px;}

    .Radio {
    display: none;
    }

    .label1 {
      margin: 5px; /* ラベル外側の余白を指定する */
      border: 1px solid #006DD9;/* ラベルの境界線を実線で指定する */
      margin: 10px -370px;
      background: #006DD9;
      color: white;
      border-radius: 7px;
    }

    .label2 {
      margin: 5px; /* ラベル外側の余白を指定する */
      border: 1px solid #006DD9;/* ラベルの境界線を実線で指定する */
      margin: 10px 390px;
      background: #006DD9;
      color: white;
      border-radius: 7px;
    }

    label.not {
      color: red;
    }

    .label1:active {
      background: #006DD9;
      color: white;
      border: 2px solid black;
    }

    .label2:active {
      background: #006DD9;
      color: white;
      border: 2px solid black;
    }

    .label1:hover {
      opacity: 0.8;
    }

    .label2:hover {
      opacity: 0.8;
    }

    .cp_ipcheck {
	    width: 90%;
	    margin: -10px 10px;
	    text-align: left;
    }

    @keyframes click-wave {
      0% {
        position: relative;
        width: 30px;
        height: 30px;
        opacity: 0.35;
      }
      100% {
        width: 200px;
        height: 200px;
        margin-top: -80px;
        margin-left: -80px;
        opacity: 0;
      }
    }
    .cp_ipcheck .option-input02 {
      position: relative;
      top: 13.33333px;
      right: 0;
      bottom: 0;
      left: 0;
      width: 30px;
      height: 30px;
      margin-right: 0.5rem;
      cursor: pointer;
      transition: all 0.15s ease-out 0s;
      color: #ffffff;
      border: none;
      outline: none;
      background: #d7cbcb;
      -webkit-appearance: none;
              appearance: none;
    }
    .cp_ipcheck .option-input02:hover {
      background: #d6a9a9;
    }
    .cp_ipcheck .option-input02:checked {
      background: #da3c41;
    }
    .cp_ipcheck .option-input02:checked::before {
      font-size: 20px;
      line-height: 30px;
      position: absolute;
      display: inline-block;
      width: 30px;
      height: 30px;
      content: '✔';
      text-align: center;
    }
    .cp_ipcheck .option-input02:checked::after {
      position: relative;
      display: block;
      content: '';
      -webkit-animation: click-wave 0.65s;
              animation: click-wave 0.65s;
      background: #da3c41;
    }
    .cp_ipcheck .option-input02.radio {
      border-radius: 50%;
    }
    .cp_ipcheck .option-input02.radio::after {
      border-radius: 50%;
    }
    .cp_ipcheck label {
      line-height: 10px;
      display: block;
    }
    .cp_ipcheck .option-input02:disabled {
      cursor: not-allowed;
      background: #b8b7b7;
    }
    .cp_ipcheck .option-input02:disabled::before {
      font-size: 20px;
      line-height: 30px;
      position: absolute;
      display: inline-block;
      width: 30px;
      height: 30px;
      content: '✖︎';
      text-align: center;
    }
</style>

</head>
<body>

<h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>