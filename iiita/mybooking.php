<?php
  session_start();
?>
<html>
<head>
  <title>My Bookings</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
<body background = "image/campus2.jpg">

	<div id = "heading" style = "margin-top: 60px">
		<h1>Your Bookings</h1>	
	</div>

	<div style = "text-align: center">
	<b>
  <?php
    include "connection.php";
	include "index6.php";
    $type=$_SESSION['type'];
	$user = $_SESSION['username'];

    $qq=mysqli_query($con,"select `r_id` from mapur where `Userid`='$user'");
	
	while ($res = mysqli_fetch_assoc($qq)) {
		$id = $res['r_id'];
	
		if (isset($id) == true) {
			$qq1 = mysqli_query($con, "select * from reservation where `r_id` = '$id'");

			while($res1 = mysqli_fetch_assoc($qq1)){
				$numberOfRooms = $res1['r_rooms'];
				$checkin = $res1['r_chkindt'];
				$checkout = $res1['r_chkoutdt'];
				$roomType = $res1['r_type'];
				
				echo "<i>Boking ID----- BOOK2017#" .$id. "<br>Check In Date----- " .$checkin. "<br>Check Out Date----- " .$checkout. "<br>Room Type----- " .$roomType. 
				
				"<br>Number of Rooms-----" .$numberOfRooms. "<br><br>";
			}
		}
	}
  ?>
  </b> 
	
	<form action="cancelbooking.php" method="post">
		<input name="r_id" type="text" placeholder = "Enter Booking ID tobe Cancelled" size = "30px" />
		<input name="Submit" type="submit" value="Cancel Booking" />
	</form> </div>
  
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
