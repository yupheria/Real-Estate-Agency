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
	
	$temp_address = "Refresh: 3; URL=http://localhost/REA/list_a_property_form.php?";
		$temp_address .= "type1=$type1&";
		$temp_address .=  "type2=$type2&";
		$temp_address .=  "title=$title&";
		$temp_address .=  "house_number=$house_number&";
		$temp_address .=  "unit_flat=$unit_flat&";
		$temp_address .=  "street_name=$street_name&";
		$temp_address .=  "location=$location&";
		$temp_address .=  "region=$region&";
		$temp_address .=  "district=$district&";
		$temp_address .=  "price=$price&";
		$temp_address .=  "bedrooms=$bedrooms&";
		$temp_address .=  "bathrooms=$bathrooms&";
		$temp_address .=  "floor_area=$floor_area&";
		$temp_address .=  "land_area=$land_area&";
		$temp_address .=  "details=$details&";
		$temp_address .=  "parking_garage=$parking_garage&";
		$temp_address .=  "amenities=$amenities&";
		$temp_address .=  "contact_phone_email=$contact_phone_email";
	
	$image1 = $_FILES["image1"];
	$image2 = $_FILES["image2"];
	$image3 = $_FILES["image3"];
	$error_msg = null;
	
	if($image1['error']!=UPLOAD_ERR_NO_FILE) {
		$img_content1 = file_get_contents($image1['tmp_name']);
		$img_type1 = $image1['type'];
		if($image1['size'] > 2000000) {
			$error_msg .= "Image 1 is too large! <br/ >";
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
		}
	} else {
		$img_content1 = file_get_contents("http://localhost/rea/patapon_img.png");
		$img_type1 = "image/png";
	}
	
	if($image2['error']!=UPLOAD_ERR_NO_FILE) {
		$img_content2 = file_get_contents($image2['tmp_name']);
		$img_type2 = $image2['type'];
		if($image2['size'] > 2000000) {
			$error_msg .= "Image 2 is too large! <br/ >";
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
		}
	} else {
		$img_content2 = file_get_contents("http://localhost/rea/patapon_img.png");
		$img_type2 = "image/png";
	}
	
	if($image3['error']!=UPLOAD_ERR_NO_FILE) {
		$img_content3 = file_get_contents($image3['tmp_name']);
		$img_type3 = $image3['type'];
		if($image3['size'] > 2000000) {
			$error_msg .= "Image 3 is too large! <br/ >";
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
		}
	} else {
		$img_content3 = file_get_contents("http://localhost/rea/patapon_img.png");
		$img_type3 = "image/png";
	}
	
	include('db_config.php');
	$img_content1 = mysqli_real_escape_string($myconnection,$img_content1);
	$img_content2 = mysqli_real_escape_string($myconnection,$img_content2);
	$img_content3 = mysqli_real_escape_string($myconnection,$img_content3);
	
	$insertData = "insert into rea_properties (type1,type2,title,house_number,unit_flat,street_name,location,region,district,price,bedrooms,bathrooms,floor_area,land_area,details,parking_garage,amenities,contact_phone_email,img_content1,img_type1,img_content2,img_type2,img_content3,img_type3,owner) values ('$type1','$type2','$title','$house_number','$unit_flat','$street_name','$location','$region','$district','$price','$bedrooms','$bathrooms','$floor_area','$land_area','$details','$parking_garage','$amenities','$contact_phone_email','$img_content1','$img_type1','$img_content2','$img_type2','$img_content3','$img_type3','$owner')";
	//echo $insertData;
	$result = mysqli_query($myconnection,$insertData);
	//$result = 0;
	if($result == 1) {
		$last_id = mysqli_insert_id($myconnection);
		mysqli_close($myconnection);
        echo "Property Added! <br/ > Returning after 3 seconds....";
		header('Refresh: 3; URL=http://localhost/rea/view_property_form.php?property_id='.$last_id);	
	} else {
		mysqli_close($myconnection);
        echo "Failed to add property! <br/ > Returning after 3 seconds....";
		header($temp_address);
	}
?>