@extends('layout')


@section('content')
@if($name)
<h1>Hello2 {{$name}}</h1>
@endif

<form action="" method="post">

      
      <input type="text" name="name">

      <button type="submit">Send</button>

</form>
@stop

@section('footer')
@parent

Email:test@mail.com
@if($urls)
<ul>
@foreach($urls as $title=> $url)
<li>
<a href="{{$url}}">{{$title}}</a>
</li>
@endforeach
</ul>
@endif
@stop
