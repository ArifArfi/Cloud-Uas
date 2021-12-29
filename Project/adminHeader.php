<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script type="text/javascript" src="asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="asset/js/nav.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 userhead">
			<p style="padding-top: 22px;">
				<b>Logged as administrator</b>
			</p>
		</div>
	</div>
</div>


<div id="wrapper">
  <div class="overlay"></div>

  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
      <li class="sidebar-brand">
        <a href="user.php">
          Menu
         </a>
      </li>
      <li>
        <a href="verifedAccount.php">View All Account</a>
      </li>
      <li>
        <a href="admin.php">View All History</a>
      </li>
      <li>
        <a href="logout.php">Logout</a>
      </li>
      
    </ul>
  </nav>
  <!-- /#sidebar-wrapper -->

  
<script>
	$(document).ready(function () {
  var trigger = $('.slider'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      slider_cross();      
    });

    function slider_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>

	
</body>
</html>

