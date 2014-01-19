<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<style>
		table form { margin-bottom: 0; }
		form ul { margin-left: 0; list-style: none; }
		.error { color: red; font-style: italic; }
	</style>
</head>

<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Blog</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/posts">Posts</a></li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="container">
		@if (Session::has('message'))
		<div class="flash alert">
			<p>{{ Session::get('message') }}</p>
		</div>
		@endif

		@yield('main')
	</div>

</body>

</html>