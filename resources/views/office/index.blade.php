@extends('layouts.app')

@section('content')
<style>
  #col1,#col2{  height: 30px;  }
  #col1{background-color:red; }
  #col2{background-color:green; }
</style>
<div class="container">
  <div class="row">
    <div id="col1" class="col-lg-6"></div>
    <div id="col2" class="col-lg-6"></div>
  </div>
</div>
@endsection
