<html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">

    
    <style>
    input {width: 625px;}
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; width: 150px;}
    td {border: solid 1px #aaa; color:black; width: 200px font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
    table {border-collapse: collapse; width:800px; text-align:left; margin:-50px 370px 10px; table-layout: fixed;}
    table th, table td {border: solid 1px black;}
    
    .disp-img2{
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
    .disp-img2:hover {
    backdrop-filter: blur(12px);
    }

    .button {
      display       : inline-block;
      border-radius : 20%;          /* 角丸       */
      font-size     : 18pt;        /* 文字サイズ */
      text-align    : center;      /* 文字位置   */
      cursor        : pointer;     /* カーソル   */
      padding       : 5px 5px;   /* 余白       */
      background    : blue;     /* 背景色     */
      color         : #ffffff;     /* 文字色     */
      line-height   : 1em;         /* 1行の高さ  */
      transition    : .3s;         /* なめらか変化 */
      box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
      border        : 2px solid blue;    /* 枠の指定 */
      width         : 100px;
      margin: 0 500px;
    }
    .button:hover {
      box-shadow    : none;        /* カーソル時の影消去 */
      color         : #ffffff;     /* 背景色     */
      background    : blue;     /* 文字色     */
    }

    html,body {
    background-image:url(../image/tree.jpg);
    background-color: white;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    }

    .form-control option:nth-child(2n+1) {
      background: lightgrey;
      width: 10px;
    }

    input.check {border-color: balck; margin: 0 10px 0 5px;
      width:			24px;
	    height:			24px;
	    -moz-transform:		scale(1.4);
	    -webkit-transform:	scale(1.4);
	    transform:		scale(1.4);}

</style>

</div>
<body>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
