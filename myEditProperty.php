<?php
	session_start();
	$type1 = $_POST["type1"];
	$type2 = $_POST["type2"];
	$title = $_POST["title"];
	$house_number = $_POST["house_number"];
	$unit_flat = $_POST["unit_flat"];
	$street_name = $_POST["street_name"];
	$location = $_POST["location"];
	$region = $_POST["region"];
	$district = $_POST["district"];
	$price = $_POST["price"];
	$bedrooms = $_POST["bedrooms"];
	$bathrooms = $_POST["bathrooms"];
	$floor_area = $_POST["floor_area"];
	$land_area = $_POST["land_area"];
	$details = $_POST["details"];
	$parking_garage = $_POST["parking_garage"];
	$amenities = $_POST["amenities"];
	$contact_phone_email = $_POST["contact_phone_email"];
	
	$owner = $_SESSION['user_id'];
	$property_id = $_POST['property_id'];
	
	include('db_config.php');

	$updateData = "update rea_properties set ";
	
	$updateData .= "type1 = '{$type1}', ";
	$updateData .= "type2 = '{$type2}', ";
	$updateData .= "title = '{$title}', ";
	$updateData .= "house_number = '{$house_number}', ";
	$updateData .= "unit_flat = '{$unit_flat}', ";
	$updateData .= "street_name = '{$street_name}', ";
	$updateData .= "location = '{$location}', ";
	$updateData .= "region = '{$region}', ";
	$updateData .= "district = '{$district}', ";
	$updateData .= "price = '{$price}', ";
	$updateData .= "bedrooms = '{$bedrooms}', ";
	$updateData .= "bathrooms = '{$bathrooms}', ";
	$updateData .= "floor_area = '{$floor_area}', ";
	$updateData .= "details = '{$details}', ";
	$updateData .= "parking_garage = '{$parking_garage}', ";
	$updateData .= "amenities = '{$amenities}', ";
	$updateData .= "contact_phone_email = '{$contact_phone_email}' ";
	
	include('db_config.php');
	$temp_address = "Refresh: 3; URL=http://localhost/REA/edit_property_form.php?property_id={$property_id}";
	$error_msg = null;
	
	$image1 = $_FILES["image1"];
	$image2 = $_FILES["image2"];
	$image3 = $_FILES["image3"];
	
	if($image1['error']!=UPLOAD_ERR_NO_FILE) {
		$img_content1 = file_get_contents($image1['tmp_name']);
		$img_type1 = $image1['type'];
		if($image1['size'] > 2000000) {
			$error_msg .= "Image is too large <br/ >";
		}
		$fileType = exif_imagetype($image1['tmp_name']);
		$allowed = array(IMAGETYPE_JPEG, IMAGETYPE_PNG);
		if (!in_array($fileType, $allowed)) {
			$error_msg .= "File is not an Image Type! <br/ >";
		}
		if($error_msg != null) {
			$error_msg .= "Returning after 3 seconds....";
			echo $error_msg;
			header($temp_address);
			exit();
		} else {
		$img_content1 = mysqli_real_escape_string($myconnection,$img_content1);
		$updateData .= ", img_content1 = '{$img_content1}', ";
		$updateData .= "img_type1 = '{$img_type1}' ";
		}
	}
	
	if($image2['error']!=UPLOAD_ERR_NO_FILE) {
		$img_content2 = file_get_contents($image2['tmp_name']);
		$img_type2 = $image2['type'];
		if($image2['size'] > 2000000) {
			$error_msg .= "Image 2 is too large <br/ >";
		}
		$fileType = exif_imagetype($image2['tmp_name']);
		$allowed = array(IMAGETYPE_JPEG, IMAGETYPE_PNG);
		if (!in_array($fileType, $allowed)) {
			$error_msg .= "Image 2 is not an Image Type! <br/ >";
		}
		if($error_msg != null) {
			$error_msg .= "Returning after 3 seconds....";
			echo $error_msg;
			header($temp_address);
			exit();
		} else {
		$img_content2 = mysqli_real_escape_string($myconnection,$img_content2);
		$updateData .= ", img_content2 = '{$img_content2}', ";
		$updateData .= "img_type2 = '{$img_type2}' ";
		}
	}
	
	if($image3['error']!=UPLOAD_ERR_NO_FILE) {
		$img_content3 = file_get_contents($image3['tmp_name']);
		$img_type3 = $image3['type'];
		if($image3['size'] > 2000000) {
			$error_msg .= "Image 3 is too large <br/ >";
		}
		$fileType = exif_imagetype($image3['tmp_name']);
		$allowed = array(IMAGETYPE_JPEG, IMAGETYPE_PNG);
		if (!in_array($fileType, $allowed)) {
			$error_msg .= "Image 3 is not an Image Type! <br/ >";
		}
		if($error_msg != null) {
			$error_msg .= "Returning after 3 seconds....";
			echo $error_msg;
			header($temp_address);
			exit();
		} else {
		$img_content3 = mysqli_real_escape_string($myconnection,$img_content3);
		$updateData .= ", img_content3 = '{$img_content3}', ";
		$updateData .= "img_type3 = '{$img_type3}' ";
		}
	}
	
	$updateData .= "where id = {$property_id}";
	//echo $updateData;
	
	$result = mysqli_query($myconnection,$updateData);
	if($result == 1) {
		mysqli_close($myconnection);
        echo "Property Updated! <br/ > Returning after 3 seconds....";
		header("Refresh: 3; URL=http://localhost/REA/view_property_form.php?property_id={$property_id}");	
	} else {
		mysqli_close($myconnection);
        echo "Failed to update property! <br/ > Returning after 3 seconds....";
		header($temp_address);
	}
?>