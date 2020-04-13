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
        <input name="office_name" type="text" class="form-control txtbx" id="office_name" value="{{$sec['office_name']}}" readonly><br><br>
        <label for="dep_name">部名</label>
        <input name="dep_name" type="text" class="form-control txtbx" id="dep_name" value="{{$sec['dep_name']}}" readonly><br><br>
        <label for="sec_name">課名</label>
        <input name="sec_name" type="text" class="form-control txtbx" id="sec_name" value="{{$sec['sec_name']}}" readonly><br><br>
      </div>
    </form>
  </div>
  <div class="row">
    <a class="btn btn-primary" href="{{ action('SectionController@edit', $sec['id'])}}">編集</a>
    <form id="delete" method="POST" action="{{ route('section.destroy', ['id' => $sec['id']])}}">
    @csrf
      <input type="submit" class="btn btn-danger" value="削除" onClick="delete_alert(event); return false;">
    </form>
  </div>
</div>
@endsection
