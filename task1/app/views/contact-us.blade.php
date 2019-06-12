@extends('layout')
@section('content')


<div>
<a href="{{$home['home']}}">Home</a>
</div>
<form action="contact-us" method="post">
<div>
       <label for="name">Name</label>
       <input type="text" name="name">

       <label for="message">Message</label>
       <input type="text" name="message">

      <button type="submit">Send</button>
</div>
</form>
@if ($error)
{{$error}}
@endif
@stop

