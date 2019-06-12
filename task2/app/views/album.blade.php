@extends('layout')
@section('content')

<p>{{$artist->Name}} album {{$album->Title}}: </p>

<ul>
@foreach($tracks as $track)
<li> <a href="/~user1/task2/track/{{$track->TrackId}}">{{$track->Name}}</a> </li>
@endforeach
</ul>

@stop

