@extends('layouts.default.default')

@section('content')

  <div class="row crud-containter">
    <div class="col-md-12">
      <h1>{{$name}}</h1>
    </div>

    <div class="col-md-12">

      {!! Form::open([ 'action' => (($formHeader->action == 'PUT') ?  [$formHeader->action, $formHeader->id] : $formHeader->action), 'method' => $formHeader->method, 'enctype'=>isset($formHeader->enctype) ? $formHeader->enctype : '']) !!}

        @foreach ($values as $value)

          <div class="form-group">
            {{Form::label(key($values), ($value->name))}}

            @switch($value->type)

              @case("text")
              @case("textarea")
                  {{Form::{$value->type}(key($values), '', ['class'=> 'form-control', 'placeholder'=>$value->placeholder])}}
              @break

              @case("file")
                {{Form::file(key($values))}}
              @break

              @case("checkbox")
                {{Form::checkbox(key($values), '', $value->check)}}
              @break

              @default

            @endswitch

          </div>

        @endforeach

        @if($formHeader == 'PUT')
          {{Form::hidden('_method','PUT')}}
        @endif

        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
      {!! Form::close() !!}

    </div>
  </div>
@stop
