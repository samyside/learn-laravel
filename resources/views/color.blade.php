<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<style>
		* {
			color: {{ $color }};
		}
	</style>
	<h1>Success!</h1>
	<p>The current timestamp is {{ date('d.m.Y') }}</p>
	<p>The count of the array = {{ count($colors) }}</p>
	<p>Output without htmlentities(): {!! $output !!}</p>
	<h2>Isset variable</h2>
	<p>{{ $city or 'Moscow' }}</p>
</body>
</html>