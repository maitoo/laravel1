@extends('layouts.helloapp99')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<form action="/company" method="post">
   <div class="button_wrapper">
@section('content')
   <input class="click" type="button" onclick="location.href='./company/add'" value="宿泊">
   <input class="click" type="button" onclick="location.href='./company/add'" value="飲食">
   <input class="click" type="button" onclick="location.href='./company/add'" value="観光地"><br>
   <a href='' class="logout">ログアウト</a>
   </div>
   @endsection

