@extends('layouts.information')

<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<button class="out">ログアウト</button>
@section('sub_title', '登録情報(飲食店)')

@section('content')
  <form action="/create" method="post" enctype="multipart/form-data">
    @csrf
    
    <input type="hidden" name="store_stype" value="飲食店">

    <span class="aa">必須</span><span>id</span>
    <input type="text" name="user_id"><br>

    <span class="aa">必須</span><span>店名</span>
    <input type="text" name="store_name" placeholder="店名" autofocus><br>

    <span class="aa">必須</span><span>都道府県</span>
    <select name="rural_code" class="form-control"> 
      <option value='' hidden> 未選択 </option>                         
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
    </select><br>

    <span class="aa">必須</span><span>エリア</span>
    <select name="area" class="form-control"> 
      <option value='' hidden> 未選択 </option>
      <option value='札幌'> 札幌 </option>
      <option value='青森'> 青森 </option>
      <option value='盛岡'> 盛岡 </option>
      <option value='仙台'> 仙台 </option>    
    </select><br>

    <span class="aa">必須</span><span>店の種類</span>
    <select name="stor_stype" class="form-control"> 
      <option value='' hidden> 未選択 </option>
      <option value='宿泊'> 宿泊 </option>
      <option value='飲食'> 飲食 </option>
      <option value='観光'> 観光 </option>    
    </select><br>
    
    <span class="bb">写真</span>
    <input type="file" name="photo_pass"><br>

    <span class="aa">必須</span><span>店情報</span>
    <textarea type="text" name="store_information" placeholder="店情報"></textarea><br>

    <span class="bb">住所</span>
    <input type="text" name="street_address" placeholder="住所"><br>

    <span class="bb">リンク</span>
    <input type="text" name="url" placeholder="リンク"><br>

    <span class="bb">宗教情報</span>
    <input type="text" name="religion" placeholder="宗教情報"><br>

    <span class="bb">アレルギー</sapn>
    <input type="text" name="allergies" placeholder="アレルギー"><br>

    <span class="aa">必須</span><span>紹介文</span>
    <textarea type="text" name="store_introduction" placeholder="紹介文"></textarea><br>

    <input type="submit" value="登録" class="button">
  </form>
@endsection


