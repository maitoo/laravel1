<html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
    .back{
    background-image:url(../image/汎用的な矢印のアイコン素材2.png);             
    background-repeat:  no-repeat;                              
    padding: 30px 25px 0px 30px;
    border-radius: 8px;                                   
    align:left;
    object-fit: cover;
    margin: 10px 350px; 
    background-color: blue;
    border-color: transparent;                                
    }
    .back:hover {
    backdrop-filter: blur(12px);
    }

  h1 {font-size: 80px; text-align: center; height: -10px; margin: -80px;}
  h3 {font-size: 45px; text-align: center; height: -5px; margin: 70px;}
  span {font-size: 20px; text-align: justify; text-justify: inter-ideograph; margin:500px;}
  textarea {width: 800px; height: 200px; margin: -100px 350px;}
  .text1 { margin: 100px 350px;}

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
      margin        : 130px 1050px;
    }
    .button:hover {
      box-shadow    : none;        /* カーソル時の影消去 */
      color         : #ffffff;     /* 背景色     */
      background    : blue;     /* 文字色     */
    }

    a { margin: 0 -100px;}
    .url {margin: -460px 1100px;}

    .under {text-decoration: underline;}
</style>

</head>
<body>
<INPUT border="1" type="button" onclick="history.back()" class="back">
<h1>@yield('title')</h1>
<h3>@yield('sub_title')</h3>
        @yield('content')
</body>
</html>