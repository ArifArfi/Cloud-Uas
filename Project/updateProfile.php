<?php

	include 'access.php';
	
	$email = $_SESSION['email'];
	$query = "SELECT * FROM akun WHERE email = '$email'";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_array($result);
	// $password = $_SESSION['password'];
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Your Profile</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script type="text/javascript" src="asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="asset/js/nav.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php include'headerUser.php' ?>
	<!-- For Button -->
  <div id="page-content-wrapper">
    <button type="button" class="slider is-closed" data-toggle="offcanvas">
      <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>
    </button>
  </div>
 
 	
<div class="super">

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-3">
				
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6" style="color: white; ">
				<form enctype="multipart/form-data" method="POST" action="updateProses.php" class="space6">
					<center><h1 style="padding-top: 20px; color: white;">UPDATE PROFILE</h1> </center> <br>
					<div style="text-align: center;">
						<img src="<?php echo $row["url_gambar"]; ?>" class="photo">	<br>
						</b>
					<br></b>
					</div>
					

					<br><br>
					<b>Nama : <input class="form-control" type="text" value="<?php echo $row["nama"]; ?>" name="nama" id="nama" required minlength="8"><br>


					Alamat : <input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $row["alamat"]; ?>" required minlength="8"><br>
					</b>
					
					<b>Email : <input class="form-control" type="email" name="email" id="email" value="<?php echo $row["email"]; ?>" required readonly>
					<br>
					
					<b>Phone : <input class="form-control" type="number" name="telp" id="telp" value="<?php echo $row["telp"]; ?>" required minlength="10">
					<br>

					Password : <input class="form-control" type="password" name="password" id="password" value="<?php echo $row["password"]; ?>" required minlength="8"><br>
					</b>
					
					
					<b>Picture : <input class="form-control" type="file" name="foto" value="<?php echo $row["url_gambar"]; ?>"><br></b>
					<br></b>

					<input type="hidden" name="destination" value="<?php echo $row["url_gambar"]; ?>">

					<center><input type="submit" class=" btn-success superup2" name="update" value="UPDATE" ></center>
					<p style="padding-bottom: 15%;"></p>
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

