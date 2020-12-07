@extends('layouts.question')


<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('sub_title', '~ よくある質問・回答 ~')

@section('content')
  <form action="/question/create?user_id={{$id}}" method="post">
      @csrf
      <h4 class="label">回答内容を入力してください。</h4><br>
      <textarea autofocus type="text" name="answer" placeholder="回答を入力"></textarea>
      <input type="submit" value="登録" class="submit3">
  </form>
@endsection

