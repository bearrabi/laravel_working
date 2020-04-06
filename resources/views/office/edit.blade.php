@extends('layouts.app')

@section('content')
<style>
  .txtbx{ width: 250px; }
</style>
<div class="container">
  <div class="row">
    <form>
      <div class="form-group">
        <label for="office_name">事業所名</label>
        <input type="text" class="form-control txtbx" id="office_name" value="{{$office->name}}"><br><br>
        <label for="office_name">郵便番号</label>
        <input type="text" class="form-control txtbx" id="office_name" value="{{$office->post_number}}">
        <input type="text" class="form-control txtbx" id="office_name" value="{{$office->post_number}}"><br><br>
        <label for="office_name">所在地</label>
        <input type="text" class="form-control txtbx" id="office_name" value="{{$office->address}}"><br><br>
        <label for="office_name">電話番号</label>
        <input type="text" class="form-control txtbx" id="office_name" value="{{$office->telnumber}}"><br><br>
      </div>
    </form>
  </div>
  <div class="row">
    <a class="btn btn-primary" href="{{ action('OfficeController@edit', $office->id)}}">編集</a>
    <a class="btn btn-danger" href="{{ action('OfficeController@destroy', $office->id)}}">削除</a>
  </div>
</div>
@endsection
