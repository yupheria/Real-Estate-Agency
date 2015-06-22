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
		echo "Please SignIn First! <br /> Returning to login page after 3 seconds";
		header("Refresh: 3; URL=http://localhost/REA/login_form.php");
		exit();
	}
?>
<div id="content" class="shadowbox">
		<?php if(isset($_SESSION['user_id'])) {
			include("user_nav_form.php");
				}	
		?>
        <div class="shadowbox row_result" id="user_list">
        	<ul>
        	<form action="myListProperty.php" method="post" enctype="multipart/form-data" onSubmit="return verifyProperty()">
            <li>
        	<table>
            	<tr>
                	<td>Type:</td> 
                    <td> 
                    <select class="shadowbox" name="type1" id="selector_1" size="10">
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Residential"){echo "selected";}} else {echo "selected";}?> value="Residential">Residential</option>
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Commercial"){echo "selected";}} ?> value="Commercial">Commercial</option>
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Rural"){echo "selected";}} ?> value="Rural">Rural</option>
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Retirement villages"){echo "selected";}} ?> value="Retirement villages">Retirement villages</option>
                    </select>
                    </td>
                </tr>
                <tr>
                	<td> </td> 
                    <td> 
                    
                    <select class="shadowbox propertyType1" name="type2" id="residential2" size="7">
                      <option <?php if(isset($_GET['type2'])) {if($_GET['type2']=="For sale"){echo "selected";}} else {echo "selected";}?> value="For sale">For sale</option>
                      <option <?php if(isset($_GET['type2'])) {if($_GET['type2']=="For rent"){echo "selected";}} ?> value="For rent">For rent</option>
                    </select>
                  </td>
                </tr>
            </table>
            </li>
            <li>
            <table>
            	<tr>
                	<td>Listing Title:</td> <td> <input class="shadowbox" name="title" id="title" type="text" value="<?php if(isset($_GET['title'])) {echo $_GET['title'];}?>"/></td>
                </tr>
                <tr>
                	<td>House #:</td> <td> <input class="shadowbox" name="house_number" id="house_number" type="text" value="<?php if(isset($_GET['house_number'])) {echo $_GET['house_number'];}?>" size="3"/>Unit/Flat:<input name="unit_flat" id="unit_flat" class="shadowbox" type="text" size="3" value="<?php if(isset($_GET['unit_flat'])) {echo $_GET['unit_flat'];}?>"/> Street Name: <input class="shadowbox" name="street_name" id="street_name" type="text" value="<?php if(isset($_GET['street_name'])) {echo $_GET['street_name'];}?>"/></td>
                </tr>
                <tr>
                	<td>Location:</td> <td> 
                    <select id="location" name="location" class="shadowbox">
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Northland"){echo "selected";}} else {echo "selected";}?> value="Northland">Northland</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Auckland"){echo "selected";}} ?> value="Auckland">Auckland</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Waikato"){echo "selected";}} ?> value="Waikato">Waikato</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Bay Of Plenty"){echo "selected";}} ?> value="Bay Of Plenty">Bay Of Plenty</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Gisborne"){echo "selected";}} ?> value="Gisborne">Gisborne</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Hawkes Bay"){echo "selected";}} ?> value="Hawkes Bay">Hawke's Bay</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Taranaki"){echo "selected";}} ?> value="Taranaki">Taranaki</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Manawatu/Wanganui"){echo "selected";}} ?> value="Manawatu/Wanganui">Manawatu/Wanganui</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Wellington"){echo "selected";}} ?> value="Wellington">Wellington</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Nelson/Tasman"){echo "selected";}} ?> value="Nelson/Tasman">Nelson/Tasman</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Marlborough"){echo "selected";}} ?> value="Marlborough">Marlborough</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="West Coast"){echo "selected";}} ?> value="West Coast">West Coast</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Canterbury"){echo "selected";}} ?> value="Canterbury">Canterbury</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Otago"){echo "selected";}} ?> value="Otago">Otago</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Southland"){echo "selected";}} ?> value="Southland">Southland</option>
					</select> 
                    </td>
                    <tr> <td>Region:</td> <td>
                    <input type="text" name="region" class="shadowbox" value="<?php if(isset($_GET['region'])) {echo $_GET['region'];}?>"/> 
                    </td> </tr>
                    <tr> <td>Suburb:</td> <td>
                    <input type="text" name="district" class="shadowbox" value="<?php if(isset($_GET['district'])) {echo $_GET['district'];}?>"/>
                     </td>
                </tr>
                <tr>
                	<td>Price/Rent:</td> <td> <input name="price" id="price" class="shadowbox" type="text" size="8" value="<?php if(isset($_GET['price'])) {echo $_GET['price'];}?>" /></td>
                </tr>
                <tr>
                	<td>Bedrooms:</td> <td> <input name="bedrooms" id="bedrooms" class="shadowbox" type="text" size="3" value="<?php if(isset($_GET['bedrooms'])) {echo $_GET['bedrooms'];}?>"/></td>
                </tr>
                <tr>
                	<td>Bathrooms:</td> <td> <input name="bathrooms" id="bathrooms" class="shadowbox" type="text" size="3" value="<?php if(isset($_GET['bathrooms'])) {echo $_GET['bathrooms'];}?>"/></td>
                </tr>
                <tr>
                	<td>Foor Area:</td> <td> <input name="floor_area" id="floor_area" class="shadowbox" type="text" size="4" value="<?php if(isset($_GET['floor_area'])) {echo $_GET['floor_area'];}?>"/>m<small><sup>2</sup></small></td>
                </tr>
                <tr>
                	<td>Land Area:</td> <td> <input name="land_area" id="land_area" class="shadowbox" type="text" size="4" value="<?php if(isset($_GET['land_area'])) {echo $_GET['land_area'];}?>"/>m<small><sup>2</sup></small></td>
                </tr>
                <tr>
                	<td>Details:</td> <td> <textarea name="details" id="details" class="shadowbox"><?php if(isset($_GET['details'])) {echo $_GET['details'];}?></textarea></td>
                </tr>
                 <tr>
                	<td>Parking/Garage:</td> <td> <textarea name="parking_garage" id="parking_garage" class="shadowbox"><?php if(isset($_GET['parking_garage'])) {echo $_GET['parking_garage'];}?></textarea></td>
                </tr>
                 <tr>
                	<td>Amenities around:</td> <td> <textarea name="amenities" id="amenities" class="shadowbox"><?php if(isset($_GET['amenities'])) {echo $_GET['amenities'];}?></textarea></td>
                </tr>
                 <tr>
                	<td>Contact Phone/Email:</td> <td> <input name="contact_phone_email" id="contact_phone_email" class="shadowbox" type="text" value="<?php if(isset($_GET['contact_phone_email'])) {echo $_GET['contact_phone_email'];}?>"/></td>
                </tr>
                <tr>
                	<td>Image 1:</td> <td> <input name="image1" type="file" /></td>
                </tr>
                <tr>
                	<td>Image 2:</td> <td> <input name="image2" type="file" /></td>
                </tr>
                <tr>
                	<td>Image 3:</td> <td> <input name="image3" type="file" /></td>
                </tr>
                 <tr>
                	<td></td> <td> <input type="Submit" /></td>
                </tr>
            </table>
            </form>
            	</li>
            </ul>
        </div>
</div>
<?php
	include ("footer_form.php");
?>
</body>
</html>