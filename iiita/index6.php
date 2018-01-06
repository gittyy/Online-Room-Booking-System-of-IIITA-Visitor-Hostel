<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<title>index page</title>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">IIITA</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
					<li><a href = userprofile.php style = "margin-left: 20px">Welcome <?php echo $_SESSION['username']?>!!</a></li>
					<li><a href = mybooking.php>My Bookings</a></li>
					<li><a href = reservation.php>Book Now</a></li>
					
	      </ul>
				<ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Logout</a></li>
      </ul>
	    </div>
	  </div>
	</nav>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
