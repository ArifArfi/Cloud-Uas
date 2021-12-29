<?php
	include "connect.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM akun WHERE email = '$email' and password = '$password'";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_assoc($result);

	if ($row['id_level'] == 2) {
		session_start();
		$take = mysqli_fetch_array($result,MYSQLI_ASSOC);
		// $_SESSION['nama'] = $take['nama'];
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		header("location: verifedAccount.php"); ?>
		<?php

	}else if($row['id_level'] == 1){
		if ($row['verified'] == 0) {
			header("location: login.php");
		}else{
			session_start();
			$take = mysqli_fetch_array($result,MYSQLI_ASSOC);
			// $_SESSION['nama'] = $take['nama'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header("location:user.php"); 
				
		}
		?>
		<?php

	}else{
		header("location:login.php");
		?>
		<?php
		echo mysqli_error($connect);
	}

?>
