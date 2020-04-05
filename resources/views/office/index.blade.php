@extends('layouts.app')

@section('content')
<style>
  #col1,#col2{  height: 30px;  }
  #col1{background-color:red; }
  #col2{background-color:green; }
</style>
<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr><th scope="col">事業所名</th><th scope="col">郵便番号</th><th scope="col">所在地</th><th scope="col">電話番号</th><th scope="col">操作</th></tr>
      </thead>
      <tbody>
        <tr>
          <td>kuma</td>
          <td>123-4567</td>
          <td>kuma県</td>
          <td>0909898989898</td>
          <td><a class="btn btn-primary" href="#">編集</a><a class="btn btn-danger" href="#">削除</a></td>
        </tr>
        <tr>
          <td>usagi</td>
          <td>789-1234</td>
          <td>usagi県</td>
          <td>0909393939393</td>
          <td><a class="btn btn-primary" href="#">編集</a><a class="btn btn-danger" href="#">削除</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
