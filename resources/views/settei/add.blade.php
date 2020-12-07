@extends('layouts.question')

@section('content')
<form action="/settei/add" method="post">
<table>
  @csrf
  <tr><th>ID</th><td><input type="text"  name="user_id"></td></tr>
  <tr><th>お問い合わせ</th><td><textarea name="contents_of_question"　cols="50" rows="5"></textarea>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
</table>
</form>
@endsection