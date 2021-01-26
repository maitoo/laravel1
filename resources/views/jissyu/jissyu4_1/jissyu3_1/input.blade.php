<html>
<head>
  <title>Jissyu/Index</title>
  <style>
    body {font-size:16pt; color:#000; }
    h1 {font-size:50pt; text-align:right; color:#000;
    margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    </style>
</head>
<body>
      <h1>Blade/Index</h1>
      <p>{{$msg}}</p>
      <form method="POST" action="/jissyu3_1">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>
    </body>
    </html>