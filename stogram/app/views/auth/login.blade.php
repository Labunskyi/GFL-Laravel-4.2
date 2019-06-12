@extends('layout')

@section('content')
<h1>Sign Up</h1>
<form method="POST">
<label>Email <input type="text" name="email"> </label>
<label>Password <input type="password" name="password"> </label>

<button type="submit"> Sign Up </button>
</form>

@stop
