<?php
	// ini proses login ya
	if(isset($_POST['login'])){
		include 'db.php';
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$email."' AND password = '".$pass."'");
		$data = mysqli_fetch_array($cek);
		$nama_pelogin = $data['nama'];
		$level_pelogin = $data['level'];

		if(mysqli_num_rows($cek) > 0){

			session_start();
			$_SESSION['nama'] = $nama_pelogin;
			$_SESSION['level'] = $level_pelogin;

			if($level_pelogin == 'admin'){
				header('location:admin.php');
			}elseif($level_pelogin == 'guru'){
				header('location:guru.php');
			}
		}else{
			echo 'gagal masuk';
		}
	}
?>