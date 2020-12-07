@extends('layouts.user_q')

@section('title', 'Q&A')

@section('sub_title', 'よくある質問')

@section('content')
  <span class="under">Q.DM機能はないのですか？</span><br>
  <span>A.twitterをやりましょう</span><br>
  <br>
  <br>
  <span class="under">Q.ドイツ語はないのですか？</span><br>
  <span>A.開発者がナチスのアンチなのでありません</span><br>
  <br>
  <br>
  @foreach($items as $item)
    @isset($item->answer)
    <span class="under">{{'Q.' . $item->contents_of_question}}</span><br>
    <span>{{'A.' . $item->answer}}</span><br>
    @endisset
    <br>
    <br>
  @endforeach
<div class="url"><a href="http://localhost:8000/form">問い合わせる</a></div>
@endsection
