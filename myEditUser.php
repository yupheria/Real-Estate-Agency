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
	if(mysqli_num_rows($query) > 1)
  	{
		mysqli_close($myconnection);
        echo "Username already taken! <br/ > Returning after 3 seconds....";
		header("Refresh: 3; URL=http://localhost/REA/editUser_form.php");
  	}
  	else
  	{
			session_start();
        $sql = "update rea_users set ";
		$sql .= "username='$username',"; 
		$sql .= "password='$password',"; 
		$sql .= "first_name='$first_name',"; 
		$sql .= "last_name='$last_name',"; 
		$sql .= "email='$email',"; 
		$sql .= "address='$address',"; 
		$sql .= "phone='$phone'";
		$sql .= "where id = {$_SESSION['user_id']}";
		//echo $sql;
		 mysqli_query($myconnection,$sql);
		 if(!mysql_errno()){ 
		 	$_SESSION['login_user']=$username;
			$_SESSION['first_name']=$first_name;
			$_SESSION['last_name']=$last_name;
			echo "User Updated! <br/ > Returning after 3 seconds....";
			header('Refresh: 3; URL=http://localhost/REA/main_page_form.php');
		 }
		 mysqli_close($myconnection);
  	}
?>