<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form method="post">
	{{csrf_field()}}
		<table>
			<tr>
				<td>USERNAME</td>
				<td><input type="text" name="username" value="{{session('username')}}"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>

	<div>
		{{session('message')}}
		{{session('count')}}
	</div>

</body>
</html>