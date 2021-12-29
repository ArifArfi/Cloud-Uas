<?php

	include 'access.php';
	
	$id_transaksi = $_POST['id_transaksi'];
	$query = "SELECT transaksi.id_transaksi as ID, akun.nama as Nama, item.nama as item,item.harga as price ,transaksi.tanggal as tanggal, transaksi.destination as destination, transaksi.quantity as quantity, transaksi.status as status, (item.harga * transaksi.quantity) as total from transaksi left join akun on transaksi.id_akun = akun.id_akun LEFT join item on transaksi.id_item = item.id_item WHERE transaksi.id_transaksi = '$id_transaksi'";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_array($result);
	// $password = $_SESSION['password'];
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Status Payment</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script type="text/javascript" src="asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="asset/js/nav.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php include'adminHeader.php' ?>
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
				<form enctype="multipart/form-data" method="POST" action="editProcess.php" class="space6">
					<center><h1 style="padding-top: 20px; color: white;font-family: ALGERIAN;">PAYMENT CONFIRMATION</h1> </center> <br>			
					Status : <input class="form-control" type="number" name="status"  value="<?php echo $row["status"]; ?>" required><br>
					</b>
				
					<br></b>
					<input type="hidden" name="id_transaksi" value="<?php echo $row["ID"]; ?>">
					<center><input type="submit" class=" btn-success superup2" value="UPDATE" ></center>
					<p style="padding-bottom: 55%;"></p>
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

