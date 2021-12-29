<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/jquery.js"></script>
</head>
<body>

<?php include'header2.php' ?>

<!-- Banner -->
<hr style="width: 30%; margin-top: 40px; margin-bottom: 20px;">


<!-- Content -->

<section class="grid">

	<!-- Bagian 1 -->
	<div class="image-order">
		<img src="asset/img/ban2.jpg" class="img2">
	</div>
	<div class="text-order text">
		<p><b>Ordered</b></p>
		Easy ordering, there are many food menu choices. you just order and we will deliver it to you. Food delivery can be done via grab or motorbike taxi for areas within our reach.
		<p></p>
		<hr style="width: 50%;">
		<p>
			<img src="asset/img/gojek.png" style="width: 70px;">
			<img src="asset/img/grab.png" style="width: 90px;">
		</p>

	</div>

	<!-- Bagian 2 -->
	<div class="image-food bg">
		<img src="asset/img/food.jpg" class="img1">
	</div>
	<div class="text-food text bg">
		<p><b>Featured Food</b></p>
		Foods that have been tested for quality, are safe and have tested their health for consumption.
		Heavy foods that pay attention to levels of protein and vitamins 	needed by your body.
		Provides fitness to your body

		<p class="button"><a href="menu.php" class="box">More...</a></p>


	</div>
	<!-- Bagian 3 -->
	<div class="image-drink">
		<img src="asset/img/drink.jpg" class="img2">
	</div>
	<div class="text-drink text">
		<p><b>Featured Drink</b></p>
		Drinks that have a variety of flavors that will accompany your meal. Rich in vitamins to refresh your body. Safe and healthy for your digestion.

		<p class="button"><a href="menu.php" class="box">More...</a>
		</p>

	</div>
	<!-- Bagian 4 -->
	<div class="image-checkin bg">
		<img src="asset/img/pay.jpg" class="img1">
	</div>
	<div class="text-checkin text bg">
		<p><b>Payment</b></p>
			Easy payments can be made anywhere and anytime. We can accept payments via bank or digital wallets. We support several platforms that make it easier for you to make payments.
		<p></p>
		<hr style="width: 50%;">
		<p>
			<img src="asset/img/ovo.png" style="width: 35px;">
			<img src="asset/img/linkaja.png" style="width: 70px;">
			
			<img src="asset/img/gopay.png" style="width: 120px;">
			
		</p>
	</div>
	
	

</section>


<!-- <hr style="width: 30%; color: white;"> -->
<div class="what">
	<hr style="width: 20%;">
	<p>What a Visitor Say</p>
	<hr style="width: 25%;">
</div>
<ul class="comment">

<?php
	include 'connect.php';

	$query = "SELECT kom.id_komentar as id_komentar, kom.komentar as comment, kom.id_akun as id_akun, akun.id_akun, akun.nama as nama, akun.alamat as alamat, akun.url_gambar as gambar ,akun.email as email from komentar as kom left join akun on kom.id_akun = akun.id_akun order by rand()";
	$result = mysqli_query($connect, $query);

	if (mysqli_num_rows($result) > 0) {
		$skale = 3;
		while ($row = mysqli_fetch_assoc($result)) {
			
			if ($skale > 0) {
				# code...
			
			?>

	<li>
		<div style="font-size: 17px;font-weight: bold;">
			<img src="<?php echo $row['gambar']; ?>" class="photo"><br>
			<br><?php echo $row['nama']; ?> 	
		</div>

		<hr style="width: 30%">
		<div style="width: 240px;">		
			<?php echo $row['comment']; ?>
		</div>

	</li>
	

			<?php
			$skale--;
			}
		}
	}

?>
</ul>
<div style="padding: 4%;"></div>
<?php include'footer.php' ?>

</body>
</html>