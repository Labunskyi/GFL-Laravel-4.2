@extends('layout')
@section('content')

<a href="{{$home['home']}}">Home</a>
<h1>Articles:</h1>

@if($articles)
<ul>
@foreach($articles as $url=> $title)
<li>
<a href="{{$url}}">{{$title}}</a>
</li>
@endforeach
</ul>
@endif

@stop

