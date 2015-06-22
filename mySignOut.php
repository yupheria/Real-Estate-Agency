<?php 
	session_start();
	session_unset(); 
	session_destroy();
	echo "SignOut Successfull! <br/ > Redirecting to home page after 3 seconds....";
	header('Refresh: 3; URL=http://localhost/REA/home_form.php');
?>