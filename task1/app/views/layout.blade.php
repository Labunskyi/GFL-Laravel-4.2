<html>

<body>
<div id ="header">
@section('header')
HEADER
@show
</div>

<div id="content">
@yield('content')
</div>

<div id="footer">
@section('footer')
FOOTER
@show
</div>

</body>
</html>
