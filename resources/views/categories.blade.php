@extends('layouts.default.default')

@section('content')

<?php
	$categories = getDataFromAPI("http://localhost:8000/category/");
?>

<p>*For now single - is main category and double -- is sub category. Need to design it better.</p>

@foreach($categories->data as $category)
<br />
<br />
-{{$category->title}}

    @if(count($category->branches->data) > 0)
    <br />
        @foreach($category->branches->data as $branch)
            --{{$branch->title}}
        @endforeach
    @endif
@endforeach

@stop
