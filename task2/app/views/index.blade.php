@extends('layout')
@section('content')
<p>Artists: </p>

@if($artists)
<ul>
@foreach($artists as $artist)

<li> <a href="/~user1/task2/artist/{{$artist->ArtistId}}">{{$artist->Name}}</a></li>
@endforeach
</ul>
@endif

@stop

