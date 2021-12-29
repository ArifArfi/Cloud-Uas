<?php

	include 'access.php';
	
	$email = $_SESSION['email'];
	

	// For transaksi
	$query = "SELECT transaksi.id_transaksi as ID, akun.nama as Nama, item.nama as item, transaksi.tanggal, transaksi.destination as destinasi, transaksi.quantity as jumlah, transaksi.status as status from transaksi left join akun on transaksi.id_akun = akun.id_akun LEFT join item on transaksi.id_item = item.id_item where akun.email = '$email'";

	$result = mysqli_query($connect, $query);

	?>

<!DOCTYPE html>
<html>
<head>
	<title>History</title>
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
 

<center><h1 style="padding-top: 20px; color: white;">Your<i> Ordered</i> History </h1> </center> <br><br>

<div style="margin-left: auto;margin-right: auto;">
<table  cellspacing='0' class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Menu</th>
			<th>Quantity</th>
			<th>Date</th>
			<th>Destination</th>
			<th>Status</th>
		</tr>
	</thead>

	<?php 

	if (mysqli_num_rows($result) < 1) {
		 ?>
		<tbody>
			<tr>
				<td style="text-align: center;">-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>

			</tr>
			</tbody>
		<?php
	}else{
		while ($row = mysqli_fetch_array($result)) {
	    ?>
		<tbody>
			<tr>
				<td style="text-align: center;"><?php echo $row["Nama"]; ?></td>
				<td><?php echo $row["item"]; ?></td>
				<td><?php echo $row["jumlah"]; ?></td>
				<td><?php echo $row["tanggal"]; ?></td>
				<td><?php echo $row["destinasi"]; ?></td>
				<td>
					<?php
						if ($row["status"] == 0) {
							?>
								<input type="button1" class="btn-success"  value="NO PAYMENT" readonly>

							<?php


						}else{
							?>
							<input type="button1" class="btn-success"  value="CONFIRM" readonly>
							<?php
						}

					?>

				</td>
			</tr>
			</tbody>
		<?php
		}
	}
	?>

</table>
</div>

<div style="padding: 19%;"></div>

<div class="copyright">
	@copyright by SunResto
</div>

</body>
</html>