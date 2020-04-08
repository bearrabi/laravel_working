@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr><th scope="col">事業所名</th><th scope="col">郵便番号</th><th scope="col">所在地</th><th scope="col">電話番号</th><th scope="col">操作</th></tr>
      </thead>
      <tbody>
      @foreach ($offices as $office)
        <tr>
          <td>{{$office->name}}</td>
          <td>{{$office->post_number}}</td>
          <td>{{$office->address}}</td>
          <td>{{$office->telnumber}}</td>
          <td><a class="btn btn-primary" href="{{ action('OfficeController@edit', $office->id)}}">編集</a><a class="btn btn-danger" href="{{ action('OfficeController@destroy', $office->id)}}">削除</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
