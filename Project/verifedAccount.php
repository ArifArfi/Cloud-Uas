<?php

	include 'access.php';
	
	$email = $_SESSION['email'];
	

	// For Account
	
	$query = "SELECT akun.id_akun as id_akun, akun.nama as nama, akun.alamat as alamat , akun.email as email , akun.password as password , akun.id_level as id_level, akun.verified as verified, akun.telp as telp, level_admin.nama_level as nama_level FROM akun left join level_admin on akun.id_level = level_admin.id_level WHERE akun.id_level = 1";

	$result = mysqli_query($connect, $query);

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Verifed Account</title>
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
 

<center><h1 style="padding-top: 20px; color: white;">All List of<i> Accounts</h1></i> </center> <br><br>

<div style="margin-left: auto;margin-right: auto;">
<table  cellspacing='0' class="table3">
	<thead>
		<tr>
			<!-- <th>ID</th> -->
			<th>Name</th>
			<!-- <th>Alamat</th> -->
			<th>Email</th>
			<th>Password</th>
			<th>Level</th>
			<!-- <th>Phone</th> -->
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
				<td>-</td>

			</tr>
			</tbody>
		<?php
	}else{
		while ($row = mysqli_fetch_array($result)) {
	    ?>
		<tbody>
			<tr>
				
				<td style="text-align: center;"><?php echo $row["nama"]; ?></td>
				<!-- <td><?php echo $row["alamat"]; ?></td> -->
				<td><?php echo $row["email"]; ?></td>
				<td>********</td>
				<td><?php echo $row["nama_level"]; ?></td>
				<!-- <td><?php echo $row["telp"]; ?></td> -->
				<td>
					<?php
						if ($row["verified"] == 0) {
							?>
								<input type="button1" class="btn-success"  value="NO VERIFIED" readonly>

							<?php


						}else{
							?>
							<input type="button1" class="btn-success"  value="VERIFIED" readonly>
							<?php
						}

					?>

				</td>
			</tr>
			</tbody>
			<tbody>
				<td colspan="2" style="text-align: right;">

					<form enctype="multipart/form-data" method="POST" action="editAdmin.php" class="space6">

					<input type="hidden" name="email" value="<?php echo $row["email"]; ?>">

					<input type="submit" class="btn-success superup2" value="EDIT"></form>
					
					<!-- <hr style="width: 30%;"> -->
				</td>
				<td colspan="3" style="text-align: left;">
					<form enctype="multipart/form-data" method="POST" action="deleteAccount.php" class="space6">

					<input type="hidden" name="email" value="<?php echo $row["email"]; ?>">

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