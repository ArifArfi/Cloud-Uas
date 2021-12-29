<?php

	include 'access.php';
	
	$email = $_SESSION['email'];
	

	// For transaksi
	$query = "SELECT transaksi.id_transaksi as ID, akun.nama as Nama, item.nama as item,item.harga as price ,transaksi.tanggal as tanggal, transaksi.destination as destination, transaksi.quantity as quantity, transaksi.status as status, (item.harga * transaksi.quantity) as total from transaksi left join akun on transaksi.id_akun = akun.id_akun LEFT join item on transaksi.id_item = item.id_item";

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

<?php include'adminHeader.php' ?>
	<!-- For Button -->
  <div id="page-content-wrapper">
    <button type="button" class="slider is-closed" data-toggle="offcanvas">
      <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>
    </button>
  </div>
 

<center><h1 style="padding-top: 20px; color: white;">History All Ordered </h1> </center> <br><br>

<div style="margin-left: auto;margin-right: auto;">
<table  cellspacing='0' class="table3">
	<thead>
		<tr>
			<!-- <th>ID</th> -->
			<th>Name</th>
			<!-- <th>Date</th> -->
			<th>Menu</th>
			<th>Quantity</th>
			<th>Destination</th>
			<th>Total</th>
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
				<!-- <td><?php echo $row["tanggal"]; ?></td> -->
				<td><?php echo $row["item"]; ?></td>
				<td><?php echo $row["quantity"]; ?></td>
				<td><?php echo $row["destination"]; ?></td>
				<td>Rp <?php echo $row["total"]; ?></td>

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
			<tbody>
				<td colspan="3" style="text-align: right;">

					<form enctype="multipart/form-data" method="POST" action="editForm.php" class="space6">

					<input type="hidden" name="id_transaksi" value="<?php echo $row["ID"]; ?>">

					<input type="submit" class="btn-success superup2" value="EDIT"></form>
					
				

					
					<!-- <hr style="width: 30%;"> -->
				</td>
				<td colspan="3" style="text-align: left;">
					<form enctype="multipart/form-data" method="POST" action="deleteProcess.php" class="space6">

					<input type="hidden" name="id_transaksi" value="<?php echo $row["ID"]; ?>">

					<input type="submit" class="btn-success superup2" value="DELETE"></form>
				</td>

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