@extends('layouts.kigyouapp')

@section('title', '登録情報(飲食)')

@section('content')
  @if (count($errors) > 0)
  <div>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
   <form action="/kigyou2" method="post">
   <table>
      @csrf
      <tr><th>店名: </th><td><input type="text" size="50"
        name="store_name" value="{{old('store_name')}}"></td></tr>
      <tr><th>地方: </th><td><input type="text" size="50"
        name="rural_code" value="{{old('rural_code')}}"></td></tr>
      <tr><th>エリア: </th><td><input type="text" size="50" 
        name="area" value="{{old('area')}}"></td></tr>
      <tr><th>写真: </th><td><input type="file" 
        name="photo_pass" value="{{old('photo_pass')}}"></td></tr>
      <tr><th>店情報: </th><td><textarea cols="20" rows="3" 
        name="store_infomation" value="{{old('store_infomation')}}"></textarea></td></tr>
      <tr><th>リンク: </th><td><input type="url" size="50"
        name="url" value="{{old('url')}}"></td></tr>
      <tr><th>宗教情報: </th><td><textarea cols="20" rows="3" 
        name="religion" value="{{old('religion')}}"></textarea></td></tr>
      <tr><th>アレルギー: </th><td><textarea cols="20" rows="3"
        name="allergies" value="{{old('allergies')}}"></textarea></td></tr>
      <tr><th>紹介文: </th><td><textarea cols="20" rows="3"
        name="store_introduction" value="{{old('store_introduction')}}">
      </textarea></td></tr>
      <div class="touroku">
      <tr><th></th><td>
      <a href=""></a>
      <input type="submit" value="登録"></td></tr>
      </div>
   </table>
   </form>
@endsection