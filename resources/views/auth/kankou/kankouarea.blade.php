@extends('layouts.kankouareaapp')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img0">
@section('content1')

  <h1>北海道の観光情報</h1>
<hr size="1">
  <div class="hoteru">
      <div class="hoteru2">
      観光スポット情報
      </div>
    </div>
<hr size="1">
@endsection
@section('content2')

<p>地方エリアから探す</p>

<hr size="1">

    <h3><input type="submit" value="札幌"
      style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
    <input type="submit" value="函館・大沼・前松" 
      style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
    <input type="submit" value="稚内・留萌"
      style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
    <input type="submit" value="旭川"
      style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
    <input type="submit" value="知床・北見"
      style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
    <input type="submit" value="阿寒・根室"
      style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
    <input type="submit" value="十勝"
      style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;"></h3>

@endsection