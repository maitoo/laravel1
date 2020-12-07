@extends('layouts.helloapp98')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<form action="/question" method="post">
   <div class="button_wrapper">
@section('content')
<input class="click" type="button" onclick="location.href='./company7'" value="宿泊">
   <input class="click" type="button" onclick="location.href='./company7'" value="飲食">
   <input class="click" type="button" onclick="location.href='./company7'" value="観光地"><br>
   <a href='' class="logout">ログアウト</a>
   </div>
   @endsection
