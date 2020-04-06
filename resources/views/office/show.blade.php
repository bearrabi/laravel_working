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
        <input type="text" class="form-control txtbx" id="office_name" value="{{$office->name}}" readonly><br><br>
        <label for="office_postnumber">郵便番号</label>
        <input type="text" class="form-control txtbx" id="office_postnumber" value="{{$office->post_number}}" readonly><br><br>
        <label for="office_address">所在地</label>
        <input type="text" class="form-control txtbx" id="office_address" value="{{$office->address}}" readonly><br><br>
        <label for="office_telnumber">電話番号</label>
        <input type="text" class="form-control txtbx" id="office_telnumber" value="{{$office->telnumber}}" readonly><br><br>
      </div>
    </form>
  </div>
  <div class="row">
    <a class="btn btn-primary" href="{{ action('OfficeController@update', $office->id)}}">更新</a>
  </div>
</div>
@endsection
