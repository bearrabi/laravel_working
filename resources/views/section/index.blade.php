@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr><th scope="col">事業所名</th><th scope="col">部名</th><th scope="col">課名</th><th scope="col">操作</th></tr>
      </thead>
      <tbody>
      @foreach ($sections as $sec)
        <tr>
          <td>{{$sec['office_name']}}</td>
          <td>{{$sec['dep_name']}}</td>
          <td>{{$sec['sec_name']}}</td>
          <td>
            <div class="container">
            <div class="row">
              <a class="btn btn-primary" href="{{ action('SectionController@edit', $sec['sec_id'])}}">編集</a>
              <form id="delete" method="POST" action="{{ route('section.destroy', ['id' => $sec['sec_id']])}}">
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