@extends('layouts.crud.add')

@section('form')

    {!! Form::open(['action' => 'TestController@Test', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}

      <div class="form-group">
        {{Form::label('website_url', 'Website Url')}}
        {{Form::text('website_url', '', ['class'=> 'form-control', 'placeholder'=>'http://'])}}
      </div>
      <div class="form-group">
        {{Form::label('category', 'Category')}}
        {{Form::text('category', '', ['id'=>'article-ckeditor', 'class'=> 'form-control ', 'placeholder'=>'category'])}}
      </div>
      <div class="form-group">
        {{Form::label('logo', 'Logo')}}
        {{Form::file('logo')}}
      </div>
      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['class'=> 'form-control', 'placeholder'=>'description'])}}
      </div>
      <div class="form-group">
        {{Form::label('age_restrict', 'Age Restriction')}}
        {{Form::checkbox('age_restrict', '', false)}}
      </div>

      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}

@stop
