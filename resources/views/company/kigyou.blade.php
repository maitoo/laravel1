@extends('layouts.kigyouapp')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<form action="/question" method="post">
@section('title', '登録情報(飲食)')

@section('content4')
<select name="type" style="width:355px;height:30px;">
  <option value="001">宿泊</option>
  <option value="002">飲食</option>  
  <option value="003">観光</option>  
</select>
@endsection

@section('content1')
<form action="#">
        <select name="parentS" onchange="createChildOptions(this.form)" style="width:355px;height:30px;">
                    <option value="" class="puru">選択して</option>
                    <optgroup label="北海道地方" style="background-color: lightblue;"></optgroup>
        <option value="1" >北海道</option>
        <optgroup label="東北地方" style="background-color: lightblue;"></optgroup>
        <option value="2" >青森県</option>
        <option value="3" >岩手県</option>
        <option value="4" >宮城県</option>
        <option value="5" >秋田県</option>
        <option value="6" >山形県</option>
        <option value="7" >福島県</option>
        <optgroup label="関東地方" style="background-color: lightblue;"></optgroup>
        <option value="8" >茨城県</option>
        <option value="9" >栃木県</option>
        <option value="10" >群馬県</option>
        <option value="11" >埼玉県</option>
        <option value="12" >千葉県</option>
        <option value="13" >東京都</option>
        <option value="14" >神奈川県</option>
        <optgroup label="中部地方" style="background-color: lightblue;"></optgroup>
        <option value="15" >新潟県</option>
        <option value="16" >富山県</option>
        <option value="17" >石川県</option>
        <option value="18" >福井県</option>
        <option value="19" >山梨県</option>
        <option value="20" >長野県</option>
        <option value="21" >岐阜県</option>
        <option value="22" >静岡県</option>
        <option value="23" >愛知県</option>
        <optgroup label="近畿地方" style="background-color: lightblue;"></optgroup>
        <option value="24" >三重県</option>
        <option value="25" >滋賀県</option>
        <option value="26" >京都府</option>
        <option value="27" >大阪府</option>
        <option value="28" >兵庫県</option>
        <option value="29" >奈良県</option>
        <option value="30" >和歌山県</option>
        <optgroup label="中国地方" style="background-color: lightblue;"></optgroup>
        <option value="31" >鳥取県</option>
        <option value="32" >島根県</option>
        <option value="33" >岡山県</option>
        <option value="34" >広島県</option>
        <option value="35" >山口県</option>
        <option value="36" >徳島県</option>
        <option value="37" >香川県</option>
        <option value="38" >愛媛県</option>
        <option value="39" >高知県</option>
        <optgroup label="九州地方" style="background-color: lightblue;"></optgroup>
        <option value="40" >福岡県</option>
        <option value="41" >佐賀県</option>
        <option value="42" >長崎県</option>
        <option value="43" >熊本県</option>
        <option value="44" >大分県</option>
        <option value="45" >宮崎県</option>
        <option value="46" >鹿児島県</option>
        <option value="47" >沖縄県</option>
      </optgroup>
                </select></td></tr>
  </form>
@endsection

@section('content2')
<!--表示位置--><div id="childS"></div>
@endsection

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
   <form action="/kigyou" method="post">

   
  <script type="text/javascript">
    /* 子ジャンル（selectC）用の配列 */
    var item = new Array();

        item[0] = new Array();
        item[0][0]="---------------------";

        /* Fruits */
        item[1] = new Array();
        item[1][0]="選択して";
        item[1][1]="札幌";
        item[1][2]="定山渓";
        item[1][3]="小樽・キロロ・積丹";
        item[1][4]="ニセコ・ルスツ";
        item[1][5]="洞爺・登別・苫小牧";
        item[1][6]="函館・大沼・松前";
        item[1][7]="稚内・留萌";
        item[1][8]="旭川・層雲峡";
        item[1][9]="富良野・美瑛・トマム";

        /* Vegitables */
        item[2]= new Array();
        item[2][0]="選択して";
        item[2][1]="青森";
        item[2][2]="弘前地";
        item[2][3]="八戸";

        /* Drinks */
        item[3] = new Array();
        item[3][0]="選択して";
        item[3][1] = "盛岡";
        item[3][2] = "宮古";
        item[3][3] = "北上";
        item[3][4] = "滝沢";
        item[3][5] = "釜石";

    /* 子ジャンルのID名 */
    var idName="childS";

    /* 親ジャンルが変更されたら、子ジャンルを生成 */
    function createChildOptions(frmObj) {
        /* 親ジャンルを変数pObjに格納 */
        var pObj=frmObj.elements["parentS"].options;
        /* 親ジャンルのoption数 */
        var pObjLen=pObj.length;
        var htm="<select name='childS' style='width:355px;height:30px'>";
        for(i=0; i<pObjLen; i++ ) {
            /* 親ジャンルの選択値を取得 */
            if(pObj[i].selected>0){
                var itemLen=item[i].length;
                for(j=0; j<itemLen; j++){
                    htm+="<option value='"+j+"'>"+item[i][j]+"<\/option>";
                }
            }
        }
        htm+="<\/select>";
        /* HTML出力 */
        document.getElementById(idName).innerHTML=htm;
    }

    /* 選択されている値をアラート表示 */
    function chkSelect(frmObj) {
        var s="";
        var idxP=frmObj.elements['parentS'].selectedIndex;
        var idxC=frmObj.elements['childS'].selectedIndex;
        if(idxP>0){
            s+="親ジャンルの選択肢："+frmObj.elements['parentS'][idxP].text+"\n";
            if(idxC > 0){
                s+="子ジャンルの選択肢："+frmObj.elements['childS'][idxC].text+"\n";
            }else{
                s+="子ジャンルが選択されていません\n";
            }
        }else{
            s+="親ジャンルが選択されていません\n";
        }
        alert(s);
    }

    /* onLoad時にプルダウンを初期化 */
    function init(){
        htm ="<select name='childS' style='width:355px;height:30px'>";
        htm+="<option value=''>"+item[0][0]+"<\/option>";
        htm+="<\/select>";
        /* HTML出力 */
        document.getElementById("childS").innerHTML=htm;
    }

    /* ページ読み込み完了時に、プルダウン初期化を実行 */
    window.onload=init;
</script>
   </table>

<div class="outer">
  <div class="inner">
 お店の種類
  </div>
</div>

<div class="outer2">
  <div class="inner2">
   地方
  </div>
</div>

<div class="outer3">
  <div class="inner3">
  店名
  </div>
</div>

<div class="outer4">
  <div class="inner4">
  写真
  </div>
</div>

<div class="outer5">
  <div class="inner5">
  店情報
  </div>
</div>

<div class="outer6">
  <div class="inner6">
  リンク
  </div>
</div>

<div class="outer7">
  <div class="inner7">
  宗教情報
  </div>
</div>

<div class="outer8">
  <div class="inner8">
  アレルギー
  </div>
</div>

<div class="outer9">
  <div class="inner9">
  紹介文
  </div>
</div>

<div class="outer10">
  <div class="inner10">
  エリア
  </div>
</div>

   <table>
      @csrf
  
      <tr><td><input  type="text" 
        name="store_name" value="{{old('store_name')}}" class="shop">
      </td></tr>
        
      <tr><td><input type="file" 
        name="photo_pass" value="{{old('photo_pass')}}" class="photo">
      </td></tr>
      
      <tr><td><input type="text" name="store_infomation" value="{{old('store_infomation')}}" class="information">
      </td></tr>

      <tr><td><input type="url" size="50"
        name="url" value="{{old('url')}}" class="url">
      </td></tr>

      <tr><td><input type="text"  
        name="religion" value="{{old('religion')}}" class="information2">
      </td></tr>

      <tr><td><input type="text"
        name="allergies" value="{{old('allergies')}}" class="information3">
      </td></tr>

    <tr><td><input type="text" 
        name="store_introduction" value="{{old('store_introduction')}}"
        class="information4" >
    </td></tr>
      </table>

      <input class="touroku" type="submit" onclick="location.href=''" value="登録">
      </div>
   </form>
@endsection