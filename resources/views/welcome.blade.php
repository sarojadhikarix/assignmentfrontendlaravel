@extends('layouts.default.default')

@section('content')

<?php
	$websites = getDataFromAPI("http://localhost:8000/website/");
?>
@foreach($websites->data as $website)
<div class="media">
  
  <div class="media-body">
    <h5 class="mt-0">{{$website->url}}</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
@endforeach
  <p>hello there</p>
@stop
