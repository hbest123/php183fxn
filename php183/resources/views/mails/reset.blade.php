<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="height:200px;background:pink;">
	
	{{ $res->name }}:你好!<br>
		请点击下面的链接找回密码<br>
		<a href="{{ env('APP_URL') }}/admin/link/{{ $res->remember_token }}">找回密码</a>
	</div>
</body>
</html>