<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		@yield('title')
	</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a href="/" class="link-underline link-underline-opacity-0"><span class="navbar-brand mb-0 h1">Todo</span></a>
			<a href="/create"><span class="btn btn-primary">Create Todo</span></a>
		</div>
	</nav>
	<div class="container">
		@yield('content')
	</div>

	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
