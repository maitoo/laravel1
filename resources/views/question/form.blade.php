@extends('layouts.user_q')

@section('content')
  <form action="/form/re" method="post">
    <h4 class="text1">お問い合わせ内容入力</h4><br>
    @csrf
    <textarea autofocus required type="text" name="question"></textarea>
    <input type="submit" value="確認" class="button">
  </form>
@endsection