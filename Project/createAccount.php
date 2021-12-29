<!DOCTYPE html>
<html>
<head>
	<title>Create Your Account</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/jquery.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include'header.php' ?>


<div class="super">

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-3">
				
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<form enctype="multipart/form-data" method="POST" action="createProses.php" class="space6" >
					<center><h1 class="space3"><b>New Account</b></h1></center>
					<b>Nama : <input class="form-control" type="text" name="nama" id="nama" required minlength="8">


					Alamat : <input class="form-control" type="text" name="alamat" id="alamat" required minlength="8">
					</b>
					
					<b>Email : <input class="form-control" type="email" name="email" id="email" required>
					<br>
					
					<b>Phone : <input class="form-control" type="number" name="telp" id="telp" required>
					<br>

					Password : <input class="form-control" type="password" name="password" id="password" required minlength="8"><br>
					</b>
					
					
					<b>Picture : <input class="form-control" type="file" name="foto"><br></b>
					<br></b>

					<center><input type="submit" class=" btn-success superup2" name="new" value="CREATE" ></center>
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