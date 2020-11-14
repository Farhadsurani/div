<!DOCTYPE html>
<html lang="en">
<head>
	@include('inc.head')
</head>
<body id="bg">
    @include('inc.nav')
    @yield('content')
    @include('inc.footer')
    @include('inc.script')
</body>
</html>