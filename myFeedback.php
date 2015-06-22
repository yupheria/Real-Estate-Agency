<?php
	$name = $_POST['feedback_name'];
	$contact = $_POST['feedback_contact'];
	$mark = $_POST['feedback_mark'];
	
	include('db_config.php');
	
	$myFeedBack = "insert into rea_feedback (name,contact,feedback) values ('$name','$contact','$mark')";
	$result = mysqli_query($myconnection,$myFeedBack);
	
	if(!mysql_errno()){ 
		echo "Thank you for your feedback! <br/ > Returning after 3 seconds....";
		} else {
		echo "Your feedback was not submitted! <br/ > Returning after 3 seconds....";	 
		}
     header('Refresh: 3; URL=http://localhost/REA/contact_us_form.php');
?>