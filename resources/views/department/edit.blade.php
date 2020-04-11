@extends('layouts.app')

@section('content')
<style>
  .txtbx{ width: 250px; }
</style>
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('department.update', ['id' => $dep['id']]) }}">
    @csrf
      <div class="form-group">
      <label for="office_name">事業所名</label>
        <input type="text" class="form-control txtbx" id="office_name" value="{{$dep['office_name']}}" readonly><br><br>
        <label for="dep_name">部名</label>
        <input type="text" class="form-control txtbx" id="dep_name" value="{{$dep['dep_name']}}" readonly><br><br>
      </div>
      <input class="btn btn-info" type="submit" value="更新">
    </form>
  </div>
</div>
@endsection
