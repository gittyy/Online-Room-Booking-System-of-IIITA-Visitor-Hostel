<?php
  session_start();
?>
<html>
<head>
  <title>Bill Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
<body style = "background-color: beige">

  <?php
    include "connection.php";
	include "index6.php";
    $type=$_SESSION['type'];

    $qq=mysqli_query($con,"select `inrsin` from tariff where `type`='$type'");

    while($res = mysqli_fetch_assoc($qq)){
      $_SESSION['price'] = $res['inrsin'];
    }
  ?>

  <div id = "heading" style = "margin-top: 60px">
    <h1>Bill</h1>
  </div>



  <div id = "heading">

    <h2>Type of Rooms : <?php echo $_SESSION['type']; ?> </h2>
    <h2>Cost per Room : <?php echo $_SESSION['price']; ?> </h2>
    <h2>Number of Rooms : <?php echo $_SESSION['norm']; ?> </h2>
    <h2>Number of Days : <?php echo $_SESSION['datediff']; ?> </h2>
    <br><br>
    <h2>Thank you for coming, <strong><?php echo $_SESSION['username']?></strong></h2>
    <h2>Following rooms have been booked.Have a nice day :)</h2>


    <?php
      include "connection.php";
      $rid=$_SESSION['rid'];
      $qq=mysqli_query($con,"select `room_number` from maprr where `r_id`= '$rid' ");


      while($res = mysqli_fetch_assoc($qq)){
      echo "<h2>Room Number-";
      echo $res['room_number'];
      echo "</h2>";
      }
    ?>


    <h1>Your bill amount is <?php echo $_SESSION['price']?> x <?php echo $_SESSION['norm'] ?> x <?php echo $_SESSION['datediff'] ?> = <?php echo $_SESSION['price']*$_SESSION['norm']*$_SESSION['datediff'] ?></h1>
  <div>
  <textarea placeholder = 'Paste Bill Description Here' cols = "80" rows = "25" id = "inputTextToSave"></textarea>
  <button onclick = "saveTextAsFile()">Download</button>
  <script src="js/bootstrap.min.js"></script>
  
  <script>
	function saveTextAsFile()
	{
		var textToSave = document.getElementById("inputTextToSave").value;
		var textToSaveAsBlob = new Blob([textToSave], {type:"text/plain"});
		var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
		var fileNameToSaveAs = "bookingdetails.doc";
	 
		var downloadLink = document.createElement("a");
		downloadLink.download = fileNameToSaveAs;
		downloadLink.innerHTML = "Download File";
		downloadLink.href = textToSaveAsURL;
		downloadLink.onclick = destroyClickedElement;
		downloadLink.style.display = "none";
		document.body.appendChild(downloadLink);
	 
		downloadLink.click();
	}
	
	function destroyClickedElement(event) {
		document.body.removeChild(event.target);
	}
  </script>

</body>
</html>
