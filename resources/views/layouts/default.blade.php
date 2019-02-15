<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Mijn Blog')</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app') }}">
</head>
<body>

	<div class="container">

		@yield('content')

	</div>

	<script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>