<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>请输入新密码</title>
</head>
<body>
	
	<h1>请输入新密码</h1>
	<hr>
	<form action="{{ url('/home/updatepass') }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $id }}">
		密码:<input type="text" name="password"><br>
		确认密码:<input type="text" name="repassword"><br>
		<button>更改密码</button>
	</form>
</body>
</html>