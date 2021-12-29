<?php

$namaHost = "localhost";
$username = "root";
$password = "";
$database = "finproweb";

$connect = mysqli_connect($namaHost,$username,$password, $database);


session_start();
if(isset($_SESSION['email']) && !empty($_SESSION['password'])) {
  	
	$email = $_SESSION['email'];
	$query = "SELECT * FROM akun WHERE email = '$email'";
  	
	$result=mysqli_query($connect,$query);
	$row = mysqli_fetch_array($result);

	if ($row['id_level'] == 1) {
         echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user.php">';
        exit;
     }

     if ($row['id_level'] == 2) {
     	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=verifedAccount.php">';
        exit;
     }

}else{
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/jquery.js"></script>
</head>
<body>

<?php include'header.php' ?>


<div class="super">

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-3">
				
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<form method="POST" action="gateway.php" class="space6">
					<center><h1  class="space3"><b>Login</b></h1></center>
					<b>Email : <input class="form-control" type="text" name="email"><br>
					Password : <input class="form-control" type="password" name="password"><br></b>
					<p class="create"><a href="createAccount.php">Create Account</a></p>
					<center><input type="submit" class=" btn-success superup2" name="login" value="LOGIN" ></center>
				</form>
			</div>

		</div>
	</div>
</div>


<div class="copyright">
	@copyright by SunResto
</div>

</body>
</html>