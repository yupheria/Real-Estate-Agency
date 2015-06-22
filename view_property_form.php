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
?>
<div id="content" class="shadowbox">
		<?php if(isset($_SESSION['user_id'])) {
			include("user_nav_form.php");
				}	
		?>
        <div class="shadowbox row_result" id="user_list">
        	<ul>
        	<form action="#" method="get">
            <li>
            <?php 
					include('db_config.php');
					$propertyList = "select * from rea_properties where id = {$_GET['property_id']}";
					$query = mysqli_query($myconnection,$propertyList);
			?>
        	<table>
            		<?php while($row = $query->fetch_assoc()) :?>
            	<tr>
                	<td>Type:</td> 
                    <td> 
                    <select disabled class="shadowbox" name="selector_1" id="selector_1" size="10">
                    <option <?php if($row['type1']=='Residential') {echo "selected";}?> value="Residential">Residential</option>
                    <option <?php if($row['type1']=='Commercial') {echo "selected";}?> value="Commercial">Commercial</option>
                    <option <?php if($row['type1']=='Rural') {echo "selected";}?> value="Rural">Rural</option>
                    <option <?php if($row['type1']=='Retirement villages') {echo "selected";}?> value="Retirement villages">Retirement villages</option>
                    </select>
                    </td>
                </tr>
                <tr>
                	<td> </td> 
                    <td> 
                    <select disabled class="shadowbox propertyType1" id="residential2"  size="7">
                    <option <?php if($row['type2']=='For sale') {echo "selected";}?> value="For sale">For sale</option>
                    <option <?php if($row['type2']=='For rent') {echo "selected";}?> value="For rent">For rent</option>
                    </select>
                    </td>
                    <tr>
                    	<td>
                    		Date Added:
                    	</td>
                        <td>
                    		<?php echo date_format(date_create($row['date_added']), 'd-m-Y');?>
                    	</td>
                     </tr>
                     </tr>
                </tr>
            </table>
            </li>
            <li>
            <table>
            	<tr>
                	<td>Listing Title:</td> <td> <?php echo $row['title'];?></td>
                </tr>
                <tr>
                	<td>House #:</td> <td> &nbsp<?php echo $row['house_number'];?>Unit/Flat: &nbsp<?php echo $row['unit_flat'];?> Street Name: &nbsp<?php echo $row['street_name'];?></td>
                </tr>
                <tr>
                	<td>Location:</td> <td> <?php echo $row['location'];?></td>
                </tr>
                <tr>
                	<td>Region:</td> <td> <?php echo $row['region'];?></td>
                </tr>
                <tr>
                	<td>Suburb:</td> <td> <?php echo $row['district'];?></td>
                </tr>
                <tr>
                	<td>Price/Rent:</td> <td> <?php echo $row['price'];?></td>
                </tr>
                <tr>
                	<td>Bedrooms:</td> <td> <?php echo $row['bedrooms'];?></td>
                </tr>
                <tr>
                	<td>Bathrooms:</td> <td> <?php echo $row['bathrooms'];?></td>
                </tr>
                <tr>
                	<td>Foor Area:</td> <td> <?php echo $row['floor_area'];?>m<small><sup>2</sup></small></td>
                </tr>
                <tr>
                	<td>Land Area:</td> <td> <?php echo $row['land_area'];?>m<small><sup>2</sup></small></td>
                </tr>
                <tr>
                	<td>Details:</td> <td> <?php echo $row['details'];?></td>
                </tr>
                 <tr>
                	<td>Parking/Garage:</td> <td> <?php echo $row['parking_garage'];?></td>
                </tr>
                 </tr>
                 <tr>
                	<td>Amenities around:</td> <td> <?php echo $row['amenities'];?></td>
                </tr>
                <tr>
                	<td>Contact Phone/Email:</td> <td> <?php echo $row['contact_phone_email'];?></td>
                </tr>
                 <tr>
                	<td>Images:</td> <td> <img src="myImage.php?property_id=<?php echo $_GET['property_id'];?>&img_id=1" width="100" height="100"/>
                    <img src="myImage.php?property_id=<?php echo $_GET['property_id'];?>&img_id=2" width="100" height="100"/>
                    <img src="myImage.php?property_id=<?php echo $_GET['property_id'];?>&img_id=3" width="100" height="100"/></td>
                </tr>
                <tr>
                	<td></td> <td> <?php if(isset($_SESSION['user_id'])) : ?>
                    <?php if($_SESSION['user_id']==$row['owner']) :?>
                    <a href="edit_property_form.php?property_id=<?php echo $row['id'];?>">Edit</a>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="delete_property_form.php?property_id=<?php echo $row['id'];?>">Delete</a>
                    <?php endif;?>
                    </td>
                    <?php endif;?>
                </tr>
            </table>
            	<?php endwhile; ?>
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