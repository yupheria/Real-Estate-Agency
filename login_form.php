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
	<form action="myLogin.php" method="post" onSubmit="return verifyLogin()">
	<h3 class="shadowbox" style="text-align:center; background-color:#D1F0FF;">REA Login</h3> <br/>
 	<ul>
     <li>
	<table>
		<tr>
			<td><p>Username</p></td>
			<td><input type="text" value="" name="username" id="username" class="shadowbox"/></td> 
		</tr>
		<tr>
			<td><p>Password</p></td>
			<td><input type="password" value="" name="password" id="password" class="shadowbox"/></td> 
		</tr>
		<tr>
			<td></td><td><input type="Submit" value="Login"/></td>
	</table>
    </li>
     </ul>
	</form>
</div>
<?php
	include ("footer_form.php");
?>
</body>
</html>