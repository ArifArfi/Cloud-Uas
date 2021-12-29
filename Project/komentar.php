<?php
	include 'access.php';
	$email = $_SESSION['email'];
	$search = "SELECT * FROM akun WHERE email = '$email'";
	$result = mysqli_query($connect, $search);
	$id_akun = "";
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			// echo $row['id_akun'];
			$id_akun = $row['id_akun'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Comment</title>
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
<center><h1 style="color: white;">Please <i> Write Your Impression</i> Of Us</h1></center>

<hr style="width: 30%;color: white">


<form method="POST" action="commentProcess.php" class="space6">

	<div style="text-align: center;margin-bottom: 25%; margin-top: 5%;">
	<textarea class="area" name="comment" type="text">
			
	</textarea><br><br>
	<input type="hidden" name="id_akun" value="<?php echo $id_akun ?>">
	<input type="submit" class="btn-success" value="ADD COMMENT">

</form>
 	
</div>
<div class="copyright">
	@copyright by SunResto
</div>

</body>
</html>