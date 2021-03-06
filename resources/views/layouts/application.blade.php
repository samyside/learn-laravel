<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<header class="header">
			@section('header')
			@show
			<h1>@yield('title')</h1>
		</header>
		<aside class="sidebar">
			@section('sidebar')
			@show
		</aside>
		<main class="main-content">
			@section('main')
			@show
		</main>
		<footer class="footer">
			@section('footer')
			@show
		</footer>
	</div>
	<style>
		.header {
			height: 100px;
			background-color: #E6F8DD;
		}
		.container {
			width: 600px;
			height: 800px;
			border: 2px solid white;
			border-radius: 40px;
			margin: 80px auto;
		}
		.sidebar {
			margin: 15px auto;
			height: 50px;
			border: 3px dotted red;
		}
		
	</style>
</body>
</html>