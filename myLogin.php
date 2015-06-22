<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	session_start();
	$_SESSION['login_user']=$username;
	
	include('db_config.php');
	
	$userCheck = "select * from rea_users where username = '$username' and password='$password'";
	
	$query = mysqli_query($myconnection,$userCheck);
	if(mysqli_num_rows($query) > 0)
  	{
		
		$row = $query->fetch_assoc();
		
		$_SESSION['login_user']=$row["username"];
		$_SESSION['user_id']=$row["id"];
		$_SESSION['first_name']=$row["first_name"];
		$_SESSION['last_name']=$row["last_name"];
		
		mysqli_close($myconnection);
        echo "Login Successfull! <br/ > Redirecting to main page after 3 seconds....";
		header('Refresh: 3; URL=http://localhost/REA/main_page_form.php');
  	}
  	else
  	{
		echo "Login Failed! <br/ > Returning after 3 seconds....";
		header('Refresh: 3; URL=http://localhost/REA/login_form.php');
		session_destroy();
		mysqli_close($myconnection);
  	}
?>