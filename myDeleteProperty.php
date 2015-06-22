<?php
	include('db_config.php');
	$propertyList = "select * from rea_properties where id = {$_GET['property_id']}";
	$query = mysqli_query($myconnection,$propertyList);
	session_start();
	$row = $query->fetch_assoc();
	if($row['owner']!=$_SESSION['user_id']) {
		echo "You do not own this property! <br /> Returning after 3 seconds";
		header('Refresh: 3; URL=http://localhost/REA/main_page_form.php');
		exit();
		}
	$sql = "DELETE FROM `rea_properties` WHERE id = {$_GET['property_id']}";
	//echo $sql;
	$result = mysqli_query($myconnection,$sql);
	
	if(!mysql_errno()){ 
		echo "Property has been deleted! <br/ > Returning after 3 seconds....";
		header("Refresh: 3; URL=http://localhost/REA/main_page_form.php");
		} else {
		echo "Deletion Failed! <br/ > Returning after 3 seconds....";	 
		header("Refresh: 3; URL=http://localhost/REA/view_property_form.php?property_id={$_GET['property_id']}");
		}
?>