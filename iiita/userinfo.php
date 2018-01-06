<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>registration form</title>

<script type = "text/javascript" language="JavaScript">
function RePasswordValidataion(sPassword,sRePassword)
{
	if(sPassword.toString()!=sRePassword.toString())
	{
		alert("Re-Type Password Has to be same as the Password");
		return false;
	}
	else{return true;}
}
function checkout()
		{
			var i=0;
			for(x=0;x<document.userinfo.elements.length;x++)
			{
				if(document.userinfo.elements[x].value=="")
				{
					f1.txtname.focus();
					alert("Pls Enter All Value");
					i=1;
					break;
				}
			}
			
			var phone = document.getElementById("inputphone").value;
			var email = document.getElementById("inputemail").value;
			var ch1 = true;
			var ch2 = false;;
			
			if (phone.length != 10) {
				ch1 = false;
				console.log("Length Should be 10");
				console.log(phone.length);
			}
			if (phone[0] >= 0 && phone[0] <= 6) {
				ch1 = false;
				console.log("Invalid Start");
			}
			
			for (var x = 0; x < phone.length; x++) {
				if (phone[x] >= '0' && phone[x] <= '9') {
				
				} else {
					ch1 = false;
					console.log("Invalid Character");
					break;
				}
			}
			
			if (ch1 == false) {
				alert("Please Enter Valid Phone Number");
				i = 1;
			}
			
			for (var x = 0; x < email.length; x++) {
				if (email[x] == '@') {
					ch2 = true;
					break;
				}
			}
			
			if (ch2 == false) {
				alert("Please Enter Valid Email");
				i = 1;
			}

			if(i==0)
			{
				f1.method="POST";
				f1.action="addres.php";
				f1.submit();
			}
		}

</script>
<style type="text/css">
<!--
.style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style4 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #C60063;
}
.style6 {font-family: Georgia, "Times New Roman", Times, serif; font-style: italic; color: #99FF66; }
.style10 {font-size: 5}
-->
</style>
<?php
include "index7.php";
?>
</head>
<body background = "image/wall.jpg" >
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<TR></tr>
<form action="userdetailinsert.php" method="post" name="userinfo"><TR></tr>
<br />

<table  class = "table" align="center" width="380" border="3" cellspacing="1" cellpadding="1">
<tr>
	<td><span class="style1"><strong>Enter user name:</strong></span> </td>
    <td width="380"><input type="text" name="username"/></td>
  </tr>
  <tr>
    <td><span class="style1"><strong>Enter password:</strong></span></td>
    <td><input type="password" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/></td>
  </tr>
  <tr>
    <td><span class="style1"><strong>Confirm password:</strong></span></td>
    <td><input type="password" name="password" maxlength="8" onchange="return RePasswordValidataion(document.userinfo.pwd.value,document.userinfo.password.value)"/></td>
  </tr>

	<tr>
		<th align=left>Full Name   :</th>
		<td colspan=4><input type=text name=txtname size=50></td>
	</tr>
	<tr>
		<th align=left>Email   :</th>
		<td colspan=4><input type="text" name="txtemail" size=50 id = "inputemail" pattern = "^[\w.+\-]+@gmail\.com$" title = "Please provide valid mail"/></td>
	</tr>
	<tr>
		<th align=left>Company   :</th>
		<td colspan=4><input type=text name=txtcompany size=50 onkeyPress="validcompany()"></td>
	</tr>
	<tr>
		<th align=left>Telephone   :</th>
		<td colspan=4><input type="text" name="txtnumber" id = "inputphone" ></td>
	</tr>
	<tr>
		<th align=left valign=top>Address   :</th>
		<td colspan=4><textarea name=txtaddress rows=5 cols=40></textarea></td>
	</tr>
</table>
<br />

	<div align="center"><input class="button" type="submit" value="Submit" onClick="checkout()" name="ok" align="right" />
	<input name="reset" type="reset" value="Cancel"/>
</div>
</form>
 
</body>
</html>
