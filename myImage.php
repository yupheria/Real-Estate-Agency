<?php
	include('db_config.php');
	$img_id = $_GET['img_id'];
	$propertyImg = "select img_content".$img_id.",img_type".$img_id." from rea_properties where id = {$_GET['property_id']}";
	$query = mysqli_query($myconnection,$propertyImg);
    $row = $query->fetch_assoc();
	//echo $propertyImg;
	header("Content-type: ".$row['img_type'.$img_id]);
    echo $row['img_content'.$img_id];
?>