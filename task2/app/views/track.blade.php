@extends('layout')
@section('content')

Track artist: {{$album->artist->Name}}
</br>
Track name: {{$track->Name}}
</br>
Track album: {{$track->album->Title}}
</br>
Track genre: {{$track->genre->Name}}
</br>
Track time (msec): {{$track->Milliseconds}}


@stop

