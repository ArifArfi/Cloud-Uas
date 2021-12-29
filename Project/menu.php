<?php
			include 'connect.php';

			$query = "SELECT nama as nama, harga as harga, url_gambar as destination FROM item";
			$result = mysqli_query($connect, $query);
			
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/jquery.js"></script>
</head>
<body>

<?php include'header.php' ?>

<table style="text-align: center; margin-bottom: 0px;" cellspacing='0' class="table">
		<thead>
			<tr style="text-align: center;">
				<th colspan="2">Menu</th>
				<th>Price</th>
			</tr>
		</thead>
		<?php
			if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
		<tbody>
			<tr>
				<td style="text-align: center;">
					<img src="<?php echo $row["destination"] ?>" style="width: 100px; box-shadow: 0 0 0 4px grey; border-radius: 2px;"></td>
				<td><?php echo $row["nama"]; ?></td>
				<td>Rp <?php echo $row["harga"]; ?></td>
			</tr>
			<?php
                }
            } else {
                echo "0 results";
            }
            ?>
		</tbody>
		<tbody>
			<tr>
				<td colspan="3" style="text-align: center;">
					<a href="login.php"><input type="submit" class="btn-success" name="login" value="ORDER NOW"></a> 
				</td>
			</tr>
		</tbody>
</table>

<?php include'footer.php'  ?>

</body>
</html>