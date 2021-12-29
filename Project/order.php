<?php
	include 'access.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Order </title>
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

<hr style="width: 20%;color: white">
<center><h1 style="color: white;">Your<i> Satisfaction</i> is Our Wish</h1></center>

<div class="cekMenu">
	<a href="menu.php" target="blank"><input type="button" class="btn-success" name="login" value="CHECK MENU"></a> <br>
	<hr style="width: 30%;color: white">
</div>


<center><h1 class="judul">Food Order</h1></center> 
<form method="POST" action="foodProcess.php" class="space6">
<table style="text-align: center; margin-bottom: 0px;" cellspacing='0' class="table">
		<thead>
			<tr style="text-align: center;">
				<th>Food</th>
				<th>Quantity</th>
				<th>Destination</th>
				<th></th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td style="text-align: center;">
					<select name="item" class="food">
					<?php
                    $qry = "SELECT * FROM item WHERE code = '1'";
                    $result = mysqli_query($connect, $qry);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="'.$row['id_item'].'">'.$row['nama'].'</option>';
                        }
                    }
                    ?>
                    	</select>
                </td>
				<td>
					 <input class="form-control" type="number" name="quantity" width="10px">
				</td>
				<td>
					<input class="form-control" type="text" name="destination">
				</td>
				<td>
					<?php 
						$email = $_SESSION['email'];
						$search = "SELECT * FROM akun WHERE email = '$email'";
						$result2 = mysqli_query($connect, $search);
						$id_akun = "";
						if (mysqli_num_rows($result2)) {
							while ($row = mysqli_fetch_assoc($result2)) {
								// echo $row['id_akun'];
								$id_akun = $row['id_akun'];
							}
						}
						
					?>
					<input type="hidden" name="id_akun" value="<?php echo $id_akun ?>">

					<input type="submit" class="btn-success" name="orderFood" value="ORDER NOW">
				
				</form>
					
				</td>
			</tr>
		</tbody>
		
</table>
<div style="padding: 1%"></div>
<!--Drink-->
<center><h1 class="judul">Drink Order</h1></center> 

<form method="POST" action="foodProcess.php" class="space6">
<table style="text-align: center; margin-bottom: 0px;" cellspacing='0' class="table">
		<thead>
			<tr style="text-align: center;">
				<th>Drink</th>
				<th>Quantity</th>
				<th>Destination</th>
				<th></th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td style="text-align: center;">
					<select name="item" class="food">
					<?php
                    $qry = "SELECT * FROM item WHERE code = '2'";
                    $result = mysqli_query($connect, $qry);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="'.$row['id_item'].'">'.$row['nama'].'</option>';
                        }
                    }
                    ?>
                    	</select>
                </td>
				<td>
					 <input class="form-control" type="number" name="quantity" width="10px">
				</td>
				<td>
					<input class="form-control" type="text" name="destination">
				</td>
				<td>
					<input type="hidden" name="id_akun" value="<?php echo $id_akun ?>">
					<input type="submit" class="btn-success" name="orderDrink" value="ORDER NOW">
				</form>
					
				</td>
			</tr>
		</tbody>
		
</table>


<div style="padding: 5%"></div>


<!-- <a href="menu.php"><input type="button" class="btn-success" name="login" value="Menu"></a> -->

 
<div class="copyright">
	@copyright by SunResto
</div>

</body>
</html>