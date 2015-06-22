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
	if(!isset($_SESSION['user_id'])) {
		echo "Please SignIn First!";
		header("Refresh: 3; URL=http://localhost/REA/login_form.php");
		exit();
	}
?>
<div id="content" class="shadowbox">
	<ul>
    	<li>
		<?php if(isset($_SESSION['user_id'])) {
			include("user_nav_form.php");
				}	
		?>
        </li>
        <li>
        <?php
			include('db_config.php');
			$sql = "select * from rea_users where id = {$_SESSION['user_id']}";
			$query = mysqli_query($myconnection,$sql);
		?>
        <div class="shadowbox">
        <?php while($row = $query->fetch_assoc()):?>
       	<form method="post" action="myEditUser.php" onSubmit="return verifyRegister()">
	<h3 class="shadowbox" style="text-align:center; background-color:#D1F0FF;">Edit User Form</h3>
	<table>
		<tr>
			<td>First Name:</td> <td> <input type="text" name="first_name" id="first_name" class="shadowbox" value="<?php echo $row['first_name'];?>"/></td>
		</tr>
		<tr>
			<td>Last Name:</td> <td> <input type="text" name="last_name" id="last_name"class="shadowbox" value="<?php echo $row['last_name'];?>"/></td> 
		</tr>
		<tr>
			<td>Address:</td> <td> <input type="text" name="address" id="address" class="shadowbox" value="<?php echo $row['address'];?>"/></td>
		</tr>
		<tr>
			<td>Phone Number:</td> <td> <input type="text" name="phone" id="phone" class="shadowbox" value="<?php echo $row['phone'];?>"/></td>
		</tr>
		<tr>
			<td>Email:</td> <td> <input type="text" name="email" id="email" class="shadowbox" value="<?php echo $row['email'];?>"/></td>
		</tr>
		<tr>
			<td>Username:</td> <td> <input type="text" name="username" id="username" class="shadowbox" value="<?php echo $row['username'];?>"/></td>
		</tr>
		<tr>
			<td>Password:</td> <td> <input type="password" name="password" id="password" class="shadowbox" /></td>
		</tr>
        <tr>
			<td>Confirm Password:</td> <td> <input type="password" name="confirm_password" id="confirm_password" class="shadowbox" /></td>
		</tr>
		<tr>
			<td></td><td><input type="Submit" value="Edit" /> <input type="reset" value="Reset"/></td>
		</tr>
	</table>
	</form>
    <?php endwhile;?>
    </div>
    </li>
    </ul>
</div>
<?php
	include ("footer_form.php");
?>
</body>
</html>