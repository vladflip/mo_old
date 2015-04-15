<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="css/style.css">

		@yield("head")
	</head>
	<body>

		<div class="outer">

			@include("layouts.inc.header")

			@yield('body')

			@include("layouts.inc.footer")

		</div>

		@yield('footer')
		
	</body>
</html>