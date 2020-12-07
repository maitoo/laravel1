@extends('layouts.question')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
@csrf
<div class="submit">
<input type="button" onclick="location.href='../kanrisya'" 
value="完了" class="submit2">
</div>

@section('sub_title', '~ よくある質問・編集 ~')

@section('content')
    @foreach ($items as $item)
    <table border="3" class="table_color">
    @csrf
    <input type="hidden" name="user_id" value="{{$item->user_id}}">
    <th class="q">質問内容</th><td class="question">{{ $item->contents_of_question}}</td><td class="answer"><a href="/question/edit?user_id={{$item->user_id}}">修正する</a></td>
    @csrf
    <tr>
    <th class="ans">回答内容</th>
    @empty ($item->answer)
    <td class="c">未回答</td>
    @else
    <td class="c">{{$item->answer}}</td>
    @endempty
    <td class="new"><a href="/question/add?user_id={{$item->user_id}}">回答する</a></td></tr>
    </table>
    <br>
    @endforeach
@endsection

