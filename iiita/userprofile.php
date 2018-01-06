<?php
  session_start();
?>

<html>
	<head>
		<title> My Profile </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
	</head>
	
	<body background = "image/campus2.jpg">
		<div id = "heading" style = "margin-top: 60px">
			<h1>My Profile</h1>	
		</div>
	
		<div style = "text-align: center">
		<b>
		<?php
			include "connection.php";
			include "index6.php";
			
			$user = $_SESSION['username'];
			$qq=mysqli_query($con,"select * from user where `Userid`='$user'");
			
			while ($res = mysqli_fetch_assoc($qq)) {
				$name = $res['User Name'];
				$email = $res['User Email'];
				$phone = $res['User Phone'];
				$address = $res['User Address'];
			}
			
			echo "<i> YourID: ".$user. "<br>Your Name: " .$name. "<br>Your Email: " .$email. "<br>Contact Information: " .$phone. "<br>Addres: " .$address;
		?></b>
		</div>
	</body>
	
</html>