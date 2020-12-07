@extends('layouts.user_q')

@section('content')
  <form action="/form/create2" method="post">
    <h4 class="text1">この内容でよろしいですか</h4><br>
    @csrf
    <textarea required type="text" name="contents_of_question">{{$question}}</textarea>
    <input type="submit" value="送信" class="button">
  </form>
@endsection