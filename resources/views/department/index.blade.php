@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr><th scope="col">事業所名</th><th scope="col">部名</th><th scope="col">操作</th></tr>
      </thead>
      <tbody>
      @foreach ($departments as $dep)
        <tr>
          <td>{{$dep->office->name}}</td>
          <td>{{$dep->name}}</td>
          <td><a class="btn btn-primary" href="{{ action('DepartmentController@edit', $dep->id)}}">編集</a><a class="btn btn-danger" href="{{ action('DepartmentController@destroy', $dep->id)}}">削除</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
