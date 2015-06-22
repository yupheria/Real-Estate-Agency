<?php
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	include('db_config.php');
	
	$userCheck = "select * from rea_users where username = '$username'";
	$query = mysqli_query($myconnection,$userCheck);
	if(mysqli_num_rows($query) > 0)
  	{
		mysqli_close($myconnection);
         echo "Username already taken! <br/ > Returning after 3 seconds....";
		header("Refresh: 3; URL=http://localhost/REA/registration_form.php?first_name=$first_name&last_name=$last_name&address=$address&phone=$phone&email=$email");
  	}
  	else
  	{
        $sql = "INSERT INTO rea_users (username, password, first_name, last_name, email, address, phone)VALUES( '$username', '$password', '$first_name', '$last_name', '$email', '$address', '$phone')";
		 mysqli_query($myconnection,$sql);
		 if(!mysql_errno()){ 
			echo "Registration Successful! <br/ > Returning after 3 seconds....";
			header('Refresh: 3; URL=http://localhost/REA/login_form.php');
		 }
		 mysqli_close($myconnection);
  	}
?>