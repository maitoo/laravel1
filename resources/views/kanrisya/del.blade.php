@extends('layouts.comp')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
@section('content')
  <form action="/information/del" method="post">
  <div class="table">
  <table>
      @csrf
      <input type="hidden" name="serial_number" value="{{$form->serial_number}}">
      <tr><th>店名:</th><td>{{$form->store_name}}</td></tr>

      <tr><th>店情報:</th><td>{{$form->store_information}}</td></tr>

      <tr><th>紹介文:</th><td>{{$form->store_introduction}}</td></tr>

      <tr><th>地方:</th><td>{{$form->rural_code}}</td></tr>

      <tr><th>エリア:</th><td>{{$form->area}}</td></tr>

      <tr><th>店の種類:</th><td>{{$form->store_stype}}</td></tr>

      <tr><th>アレルギー情報:</th><td>{{$form->allergies}}</td></tr>

      <tr><th>宗教情報:</th><td>{{$form->religion}}</td></tr>

      <tr><th>リンク:</th><td>{{$form->url}}</td></tr>

      <tr><th>住所:</th><td>{{$form->street_address}}</td></tr>

      <tr><th>写真:</th><td>{{$form->photo_pass}}</td></tr>

      @empty ($form->flag)
      <tr><th>公開情報</th><td>非公開中</td></tr>
      @else
      <tr><th>公開情報</th><td>公開中</td></tr>
      @endempty

      <tr><th></th><td><input type="submit" value="削除" class="button"></td></tr>
  </table>
  </div>
  </form>
@endsection