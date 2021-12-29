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
	<title>Profile</title>
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


<center><h1 style="padding-top: 20px; color: white;">Welcome <?php echo $row["nama"]; ?></h1> </center> <br>

<div style="text-align: center;">
		
	<img src="<?php echo $row["url_gambar"]; ?>" class="photo"><br><br><br>
	<input type="submit" class="btn-success superup2" value="UPDATE PROFILE" onclick="location.href = 'updateProfile.php'">
</div>

<div class="data">

		<table  cellspacing='0' class="table1">
			<thead>
				<tr style="text-align: center;">
					<th>Name</th>
					<th>:</th>
					<th><?php echo $row["nama"]; ?></th>
				</tr>
			</thead>
			<thead>
				<tr style="text-align: center;">
					<th>Address</th>
					<th>:</th>
					<th><?php echo $row["alamat"]; ?></th>
				</tr>
			</thead>
			<thead>
				<tr style="text-align: center;">
					<th>Email</th>
					<th>:</th>
					<th><?php echo $row["email"]; ?></th>
				</tr>
			</thead>
			<thead>
				<tr style="text-align: center;">
					<th>Phone</th>
					<th>:</th>
					<th><?php echo $row["telp"]; ?></th>
				</tr>
			</thead>
			<thead>
				<tr style="text-align: center;">
					<th>Password</th>
					<th>:</th>
					<th>********</th>
				</tr>
			</thead>
		</table>

</div>


<div class="copyright">
	@copyright by SunResto
</div>

</body>
</html>

