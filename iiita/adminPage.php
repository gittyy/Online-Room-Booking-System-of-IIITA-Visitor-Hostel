<html>
	<head>
		<title>Admin Page</title>
	</head>
	
	<body background = "image/campus2.jpg">
		<b>
		<div style = "text-align: center; margin-top: 60px">
			<?php
				include "index8.php";
				include "connection.php";
				
				$qq = mysqli_query($con,"select * from mapur");
				
				
				
				while ($res = mysqli_fetch_assoc($qq)) {
					$id = $res['r_id'];
					$user_name = $res['Userid'];
					$qq1 = mysqli_query($con,"select * from reservation");
					$qq2 = mysqli_query($con,"select * from room");		
					
					while ($res1 = mysqli_fetch_assoc($qq1)) {
						if ($id == $res1['r_id']) {
							$numberOfRooms = $res1['r_rooms'];
							$checkin = $res1['r_chkindt'];
							$checkout = $res1['r_chkoutdt'];
							$roomType = $res1['r_type'];
							
							echo "<i>Boking ID----- BOOK2017#" .$id. "<br>UserName---------" .$user_name. "<br>Check In Date----- " .$checkin. "<br>Check Out Date----- " .$checkout. "<br>Room Type----- " .$roomType. 
							
							"<br>Number of Booked Rooms-----" .$numberOfRooms. "<br>";
						}
					}
					
					while ($res2 = mysqli_fetch_assoc($qq2)) {
						if ($id == $res2['r_id']) {
							$bookedRoomNumber = $res2['room_number'];
							echo "<i>Alloted Room Number-------" .$bookedRoomNumber ."<br>";
						}
					}
					
					echo "<br><br>";
 				}
				
			?>
		</div></b>
	</body>
	
</html>