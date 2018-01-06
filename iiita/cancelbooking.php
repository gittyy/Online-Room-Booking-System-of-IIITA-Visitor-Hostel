<?php
  session_start();
?>

<html>
	<head>
		<title>Booking Cancelled</title>
	</head>

	<body background = "image/IIITA_VH2.jpg">
		<?php
			include "index6.php";
			mysql_connect("localhost", "root", "") or die("Connection Failed");
			mysql_select_db("hotel")or die("Connection Failed");
			$x = $_POST['r_id'];
			$r_id = (explode("#", $x)[1]);
			$userid = $_SESSION['username'];
			//echo $userid. "<br>";
			//echo $r_id. "<br>	";
			
			if (trim($r_id) != "") {
				$query1 = "delete from room where r_id = '".$r_id."'";
				$query2 = "delete from reservation where r_id = '".$r_id."'";
				$query3 = "delete from mapur where r_id = '".$r_id."'". " and Userid = '".$userid."'";
				echo $query3 ."<br>";
				$query4 = "delete from maprt where r_id = '".$r_id."'";
				$query5 = "delete from maprr where r_id = '".$r_id."'";
				/*if(mysql_query($query1) && mysql_query($query2) && mysql_query($query3) && mysql_query($query4) && mysql_query($query5)){
				echo "deleted";}
				else{
				echo "fail";}*/
				
				mysql_query($query3);
				
				if (mysql_affected_rows() > 0) {
					mysql_query($query1);
					mysql_query($query2);
					mysql_query($query4);
					mysql_query($query5);
					?><h2 style = "margin-top: 50px; text-align:center"> Booking Cancelled Sucessfully. GoTo MyBookings Section</h2><?php
				} else {
					?> <h2 style = "margin-top: 50px; text-align:center"> Booking ID does not Exist </h2>" <?php
				}
				
			} else {
				?> <h2 style = "margin-top: 50px; text-align:center"> Booking ID does not Exist </h2>" <?php
			}
			
		?>
		
		
		 
	</body>

</html>