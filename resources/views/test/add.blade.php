@extends('layouts.information')

@section('content')
   <form action="/test/add" method="post">
   <table>
      @csrf
<tr><th>店の種類</th><td><input type="text" name="store_name"  class="shop"></td></tr>
<tr><th>都道府県</th><td><input type="text" name="rural_code"  class="shop"></td></tr>
<tr><th>エリア</th><td><input type="text" name="area" class="shop"></td></tr>
<tr><th>店名</th><td><input type="text" name="store_name"  class="shop"></td></tr>
<tr><th>写真</th><td><input type="file" name="photo_pass"  class="photo"></td></tr>
<tr><th>店情報</th><td><input type="text" name="store_infomation" class="information"></td><tr>
<tr><th>URL</th><td><input type="url" size="50" name="url"  class="url"></td></tr>
<tr><th>宗教情報</th><td><input type="text"  name="religion"  class="information2"></td></tr>
<tr><th>アレルギー</th><td><input type="text" name="allergies"  class="information3"></td></tr>
<tr><th>店紹介</th><td><input type="text" name="store_introduction" class="information4" ></td></tr>
</table>
<input class="touroku" type="submit" value="登録">
   </form>
@endsection