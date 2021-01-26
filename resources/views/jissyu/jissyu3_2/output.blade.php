<html>
<head>
<title>Jissyu/Index</title>
  <style>
    body {font-size:16pt; color:#000; }
    h1 {font-size:50pt; text-align:right; color:#000;
    margin:-20px 0px -30px 0px; letter-spacing:-4;}
    </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <ol>
  @foreach($data as $item)
  @if ($loop->first)
  <p>データ一覧</p>
  @endif
  <li>No,{{$loop->iteration}}.{{$item}}</li>
  @if ($loop->last)
    <p>ここまで出力</p>
  @endif
  @endforeach
</body>
</html>