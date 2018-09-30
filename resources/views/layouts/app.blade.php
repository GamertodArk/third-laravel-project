<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{env('APP_NAME')}}</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<header>
		@include('inc.navbar')
	</header>

	<div class="container">

		@if (Request::is('/'))
			@include('inc.showcase')
		@endif

		<div class="row">

			<div class="col-sm">

				@include('inc.messages')

				@yield('content')
			</div>

			<div class="col-sm" style="text-align: right;">
				@include('inc.sidebar')
			</div>

		</div>
	</div>

</body>
</html>