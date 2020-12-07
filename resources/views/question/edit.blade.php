@extends('layouts.question')


<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('sub_title', '~ よくある質問・修正 ~')

@section('content')
  <form action="/question/update?user_id={{$id}}" method="post">
      @csrf
      <h4 class="label">質問内容: </h4><br>
      <textarea required type="text" name="contents_of_question"
      required="{{old('contents_of_question')}}"></textarea>
         <input type="submit" value="修正" class="submit3">
   </form>
@endsection

