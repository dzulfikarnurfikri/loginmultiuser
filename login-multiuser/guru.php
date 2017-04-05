<!DOCTYPE html>
<html>
<head>
	<title>Halaman Guru</title>
</head>
<body>
	Assalamu'alaikum<br>
	<?php 
	session_start();
	echo $_SESSION['nama'];
	?>
	<br>Anda Login sebagai 
	<?php 
	echo $_SESSION['level'];
	?>
	<br><a href="logout.php">Logout</a>
</body>
</html>