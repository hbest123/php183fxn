<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@if(session('info'))
	<h1>{{ session('info') }}</h1>
	@endif
</body>
</html>