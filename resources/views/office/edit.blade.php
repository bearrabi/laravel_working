@extends('layouts.app')

@section('content')
<style>
  .txtbx{ width: 250px; }
</style>
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('office.update', ['id' => $office->id]) }}">
    @csrf
      <div class="form-group">
        <label for="office_name">事業所名</label>
        <input type="text" class="form-control txtbx" name="office_name" id="office_name" value="{{$office->name}}"><br><br>
        <label for="office_postnumber">郵便番号</label>
        <input type="text" class="form-control txtbx" name="office_postnumber" id="office_postnumber" value="{{$office->post_number}}"><br><br>
        <label for="office_address">所在地</label>
        <input type="text" class="form-control txtbx" name="office_address" id="office_address" value="{{$office->address}}"><br><br>
        <label for="office_telnumber">電話番号</label>
        <input type="text" class="form-control txtbx" name="office_telnumber" id="office_telnumber" value="{{$office->telnumber}}"><br><br>
      </div>
      <input class="btn btn-info" type="submit" value="更新">
    </form>
  </div>
</div>
@endsection
