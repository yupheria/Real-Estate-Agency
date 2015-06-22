<html>
<head>
<title>REA</title>
<link rel="stylesheet" type="text/css" href="myCSS.css">
<script src="myJS.js"> </script>
</head>
<body>
<?php
	include ("header_form.php");
	include("nav_bar.php");
?>
<div id="content" class="shadowbox">
	<ul>
    	<li>
	<div id="registrationBox" class="shadowbox">
    
	<form method="post" action="myRegistration.php" onSubmit="return verifyRegister()">
	<h3 class="shadowbox" style="text-align:center; background-color:#D1F0FF;">Real Estate Registration Form</h3>
    
	<table>
		<tr>
			<td>First Name:</td> <td> <input type="text" name="first_name" id="first_name" class="shadowbox" value="<?php if(isset($_GET['first_name'])){echo $_GET['first_name'];}?>"/></td>
		</tr>
		<tr>
			<td>Last Name:</td> <td> <input type="text" name="last_name" id="last_name"class="shadowbox" value="<?php if(isset($_GET['last_name'])){echo $_GET['last_name'];}?>"/></td> 
		</tr>
		<tr>
			<td>Address:</td> <td> <input type="text" name="address" id="address" class="shadowbox" value="<?php if(isset($_GET['address'])){echo $_GET['address'];}?>"/></td>
		</tr>
		<tr>
			<td>Phone Number:</td> <td> <input type="text" name="phone" id="phone" class="shadowbox" value="<?php if(isset($_GET['phone'])){echo $_GET['phone'];}?>"/></td>
		</tr>
		<tr>
			<td>Email:</td> <td> <input type="text" name="email" id="email" class="shadowbox" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>"/></td>
		</tr>
		<tr>
			<td>Username:</td> <td> <input type="text" name="username" id="username" class="shadowbox"/></td>
		</tr>
		<tr>
			<td>Password:</td> <td> <input type="password" name="password" id="password"/ class="shadowbox"></td>
		</tr>
        <tr>
			<td>Confirm Password:</td> <td> <input type="password" name="confirm_password" id="confirm_password"/ class="shadowbox"></td>
		</tr>
		<tr>
			<td></td><td><input type="Submit" value="Register" /> <input type="reset" value="Reset"/></td>
		</tr>
	</table>
	</form>
    	
    </div>
    </li>
     </ul>
</div>
<?php
	include ("footer_form.php");
?>
</body>
</html>