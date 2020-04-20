<!doctype>
<html>
<head>
<title>{{config('app.name', 'wahabapp')}}</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/normal.css')}}">
</head>
<body>
@include('inc.navbar')
<div class="container">
@yield('content')
</div>
</body>
</html>