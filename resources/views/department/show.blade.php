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
        <input type="text" class="form-control txtbx" id="office_name" value="{{$dep['office_name']}}" readonly><br><br>
        <label for="dep_name">部名</label>
        <input type="text" class="form-control txtbx" id="dep_name" value="{{$dep['dep_name']}}" readonly><br><br>
      </div>
    </form>
  </div>
  <div class="row">
    <a class="btn btn-primary" href="{{ action('DepartmentController@edit', $dep['id'])}}">編集</a>
    <form id="delete" method="POST" action="{{ route('department.destroy', ['id' => $dep['id']])}}">
    @csrf
      <input type="submit" class="btn btn-danger" value="削除" onClick="delete_alert(event); return false;">
    </form>
  </div>
</div>
@endsection
