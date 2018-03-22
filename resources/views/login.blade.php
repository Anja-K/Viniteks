<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>login</h2>
	<form action="{{ route ('verify')}}" method="POST">
		{{ csrf_field() }}
		<label for="email">your email</label>
		<input type="email" name="email" />
		<label for="password">your password</label>
		<input type="password" name="password" />
		<button type="submit">Login</button>

	</form>
</body>
</html>