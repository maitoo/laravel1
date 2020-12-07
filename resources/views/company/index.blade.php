@extends('layouts.helloapp')
  
@section('content')
<form action="./company" method="post">
   <div class="button_wrapper">
   <input type="button" class="click" onclick="location.href='./information/add'" value="新規登録">
   <input type="button" class="click" onclick="location.href='/information'" value="登録情報"><br>
   <a href='' class="logout" >ログアウト</a>
   </div>
@endsection