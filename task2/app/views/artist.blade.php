@extends('layout')
@section('content')

<p>{{$artist->Name}} albums: </p>

<ul>
@foreach($albums as $album)
<li> <a href="/~user1/task2/album/{{$album->AlbumId}}"> {{$album->Title}}</a></li>
@endforeach
</ul>

@stop

