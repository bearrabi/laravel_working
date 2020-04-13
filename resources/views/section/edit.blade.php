@extends('layouts.app')

@section('content')
<style>
  .txtbx{ width: 250px; }
</style>
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('section.update', ['id' => $sec['id']]) }}">
    @csrf
      <div class="form-group">
      <div class="form-group">
        <label for="office_name">事業所名</label>
        <input name="office_name" type="text" class="form-control txtbx" id="office_name" value="{{$sec['office_name']}}" readonly><br><br>
        <label for="dep_name">部名</label>
        <input name="dep_name" type="text" class="form-control txtbx" id="dep_name" value="{{$sec['dep_name']}}" readonly><br><br>
        <label for="sec_name">課名</label>
        <input name="sec_name" type="text" class="form-control txtbx" id="sec_name"><br><br>
      </div>
      </div>
      <input class="btn btn-info" type="submit" value="更新">
    </form>
  </div>
</div>
@endsection
