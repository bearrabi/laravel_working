@extends('layouts.app')

@section('content')
<style>
  .txtbx,.selectbx{ width: 250px; }
</style>
<div class="container">
  <div class="row">
    <form method="POST" action="{{ route('office.store') }}">
    @csrf
      <div class="form-group">
        <label for="office_name">事業所名</label>
          <select name="office_name" id="office_name" class="form-control selectbx">
            @foreach($off_names as $off_name)
              <option value="{{$off_name}}">{{$off_name}}</option>
            @endforeach
          </select><br><br>
        <label for="dep_name">部名</label>
          <select name="dep_name" id="dep_name" class="form-control selectbx">
            @foreach($dep_names as $dep_name)
              <option value="{{$dep_name}}">{{$dep_name}}</option>
            @endforeach
          </select><br><br>
        <label for="sec_name">課名</label>
        <input name="sec_name" type="text" class="form-control txtbx" id="sec_name"><br><br>
      </div>
      </div>
      <input class="btn btn-info" type="submit" value="登録">
    </form>
  </div>
</div>
@endsection
