@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報新規登録画面
@endsection

@section('content')
   <form action="/jissyu13/create" method="post">
   <table>
      @csrf
      @error('name')
         <tr><th>ERROR</th>
         <td>{{$message}}</td></tr>
    @enderror
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
   @error('mail')
      <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
   @enderror
      <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
    @error('age')
      <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
   @enderror
      <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
      <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
