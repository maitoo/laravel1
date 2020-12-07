@extends('layouts.comp')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
@section('content')
  <form action="/information/edit" method="post">
  <div class="table">
  <table>
      @csrf
      <input type="hidden" name="serial_number" value="{{$form->serial_number}}">
      <tr><th>店名:</th><td><input type="text" name="store_name" value="{{$form->store_name}}"></td></tr>

      <tr><th>店情報:</th><td><input type="text" name="store_information" value="{{$form->store_information}}"></td></tr>

      <tr><th>紹介文:</th><td><input type="text" name="store_introduction" value="{{$form->store_introduction}}"></td></tr>

      <tr><th>地方:</th><td><select name="rural_code" class="form-control">
      <option value="{{$form->rural_code}}" hidden>{{$form->rural_code}}</option>
      <option value='北海道'> 北海道 </option> 
      <option value='青森県'> 青森県 </option>
      <option value='岩手県'> 岩手県 </option>
      <option value='宮城県'> 宮城県 </option>
      <option value='秋田県'> 秋田県 </option> 
      <option value='山形県'> 山形県 </option>
      <option value='福島県'> 福島県 </option>
      <option value='茨城県'> 茨城県 </option>
      <option value='栃木県'> 栃木県 </option> 
      <option value='群馬県'> 群馬県 </option> 
      <option value='埼玉県'> 埼玉県 </option> 
      <option value='千葉県'> 千葉県 </option>
      <option value='東京都'> 東京都 </option> 
      <option value='神奈川県'> 神奈川県 </option> 
      <option value='新潟県'> 新潟県 </option>
      <option value='富山県'> 富山県 </option>
      <option value='石川県'> 石川県 </option>
      <option value='福井県'> 福井県 </option> 
      <option value='山梨県'> 山梨県 </option> 
      <option value='長野県'> 長野県 </option> 
      <option value='岐阜県'> 岐阜県 </option> 
      <option value='静岡県'> 静岡県 </option> 
      <option value='愛知県'> 愛知県 </option> 
      <option value='三重県'> 三重県 </option>
      <option value='滋賀県'> 滋賀県 </option> 
      <option value='京都府'> 京都府 </option>
      <option value='大阪府'> 大阪府 </option> 
      <option value='兵庫県'> 兵庫県 </option>
      <option value='奈良県'> 奈良県 </option>
      <option value='和歌山県'> 和歌山県 </option> 
      <option value='鳥取県'> 鳥取県 </option>
      <option value='島根県'> 島根県 </option>
      <option value='岡山県'> 岡山県 </option>
      <option value='広島県'> 広島県 </option>
      <option value='山口県'> 山口県 </option> 
      <option value='徳島県'> 徳島県 </option>
      <option value='香川県'> 香川県 </option>
      <option value='愛媛県'> 愛媛県 </option>
      <option value='高知県'> 高知県 </option> 
      <option value='福岡県'> 福岡県 </option>
      <option value='佐賀県'> 佐賀県 </option>
      <option value='長崎県'> 長崎県 </option>
      <option value='熊本県'> 熊本県 </option> 
      <option value='大分県'> 大分県 </option>
      <option value='宮崎県'> 宮崎県 </option> 
      <option value='鹿児島県'> 鹿児島県 </option> 
      <option value='沖縄県'> 沖縄県 </option>
    </select></td></tr>

      <tr><th>エリア:</th><td><select name="area" class="form-control"> 
      <option value='{{$form->area}}' hidden>{{$form->area}}</option>
      <option value='札幌'> 札幌 </option>
      <option value='青森'> 青森 </option>
      <option value='盛岡'> 盛岡 </option>
      <option value='仙台'> 仙台 </option>    
    </select></td></tr>

      <tr><th>店の種類:</th><td><select name="store_stype" class="form-control">
      <option value="{{$form->store_stype}}" hidden>{{$form->store_stype}}</option>
      <option value="飲食店">飲食店</option>
      <option value="宿泊">宿泊</option>
      <option value="観光地">観光地</option>
      </select></td></tr>

      <tr><th>アレルギー情報:</th><td><input type="text" name="allergies" value="{{$form->allergies}}"></td></tr>

      <tr><th>宗教情報:</th><td><input type="text" name="religion" value="{{$form->religion}}"></td></tr>

      <tr><th>リンク:</th><td><input type="text" name="url" value="{{$form->url}}"></td></tr>

      <tr><th>住所:</th><td><input type="text" name="street_address" value="{{$form->street_address}}"></td></tr>
      
      <tr><th>写真:</th><td><input type="file" name="photo_pass" value="{{$form->photo_pass}}"></td></tr>

      <tr><th>公開</th><td><label><input name="flag" type="hidden" value= "0" ><input name="flag" type="checkbox" value="1" class="check">公開する</label></td></tr>
      
      <tr><th></th><td><input type="submit" value="更新" class="button"></td></tr>
  </table>
  </div>
  </form>
@endsection