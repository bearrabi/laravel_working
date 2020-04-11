@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr><th scope="col">事業所名</th><th scope="col">部名</th><th scope="col">操作</th></tr>
      </thead>
      <tbody>
      @foreach ($deps as $dep)
        <tr>
          <td>{{$dep['office_name']}}</td>
          <td>{{$dep['dep_name']}}</td>
          <td>
            <div class="container">
            <div class="row">
              <a class="btn btn-primary" href="{{ action('DepartmentController@edit', $dep['dep_id'])}}">編集</a>
              <form id="delete" method="POST" action="{{ route('department.destroy', ['id' => $dep['dep_id']])}}">
                @csrf
                <input type="submit" class="btn btn-danger" value="削除" onClick="delete_alert(event); return false;">
              </form>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
