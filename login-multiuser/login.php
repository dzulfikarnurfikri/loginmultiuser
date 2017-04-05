<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="box-login">
		<div class="header-box">Silahkan Login</div>
		<br><br>
		<center>
			<form action="proses.php" method="post">
				Email<br>
				<input type="email" name="email" /><br>
				Password<br>
				<input type="password" name="pass" /><br>
				<input type="submit" name="login" value="Login" />
			</form>
		</center>
	</div>
</body>
</html>