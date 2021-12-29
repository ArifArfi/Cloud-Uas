<?php
	include 'connect.php';
	session_start();
 	$email= $_SESSION['email'];
  	$password= $_SESSION['password'];

	$query = "SELECT * FROM akun where email = '$email' AND password = '$password'";
	$result = mysqli_query($connect,$query);

	$row= mysqli_num_rows($result);

 	if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
		header('location:login.php');
	}

?>