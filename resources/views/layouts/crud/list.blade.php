@extends('layouts.default.default')

@section('content')


  <div class="row crud-containter">
    <div class="col-md-12">
      <h1>{{$name}}</h1>
    </div>

    <div class="col-md-12">
      @yield('list')
    </div>
  </div>
@stop
