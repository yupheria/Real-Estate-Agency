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
	<div class="shadowbox searchbox" id="searchbox"><h3 class="shadowbox" style="text-align:center; background-color:#D1F0FF;">Estate Search</h3>
    <form method="get" action="home_form.php">
	<table>
	<tr>
	<td>Location: </td>
	<td> 
                    <select id="location" name="location" class="shadowbox">
                    	<option <?php if(isset($_GET['location'])) {if($_GET['location']=="All Locations"){echo "selected";}} else {echo "selected";}?> value="All Locations">All Locations</option>
                        <option <?php if(isset($_GET['location'])) {if($_GET['location']=="Northland"){echo "selected";}} ?> value="Northland">Northland</option>
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
	</tr>
	<tr>
	<td>District: </td>
	<td>
    <input type="text" name="district" class="shadowbox" value="<?php if(isset($_GET['district'])) {echo $_GET['district'];} else {echo "Any";}?>"/>
    </td>
	</tr>
	<tr>
	<td>Suburb:</td>
	<td>
    <input type="text" name="suburb" class="shadowbox" value="<?php if(isset($_GET['suburb'])) {echo $_GET['suburb'];} else {echo "Any";}?>"/>
    </td>
	</tr>
	
	<tr>
		<td>Price:</td>
		<td><select name="search_min_price" id="search_min_price" class="shadowbox" onChange="verifyPrice()"> 
			<option <?php if(isset($_GET['search_min_price'])) {if($_GET['search_min_price']=="0"){echo "selected";}} else {echo "selected";} ?> value="0">Any</option>
			<option <?php if(isset($_GET['search_min_price'])) {if($_GET['search_min_price']=="100000"){echo "selected";}} ?> value="100000">100,000</option>
			<option <?php if(isset($_GET['search_min_price'])) {if($_GET['search_min_price']=="250000"){echo "selected";}} ?> value="250000">250,000</option>
			<option <?php if(isset($_GET['search_min_price'])) {if($_GET['search_min_price']=="500000"){echo "selected";}} ?> value="500000">500,000</option>
			<option <?php if(isset($_GET['search_min_price'])) {if($_GET['search_min_price']=="750000"){echo "selected";}} ?> value="750000">750,000</option>
			<option <?php if(isset($_GET['search_min_price'])) {if($_GET['search_min_price']=="1000000"){echo "selected";}} ?> value="1000000">1M+</option>
		</select> to <select name="search_max_price" id="search_max_price" class="shadowbox" onChange="verifyPrice()"> 
			<option <?php if(isset($_GET['search_max_price'])) {if($_GET['search_max_price']=="0"){echo "selected";}} else {echo "selected";} ?> value="0">Any</option>
			<option <?php if(isset($_GET['search_max_price'])) {if($_GET['search_max_price']=="100000"){echo "selected";}} ?> value="100000">100,000</option>
			<option <?php if(isset($_GET['search_max_price'])) {if($_GET['search_max_price']=="250000"){echo "selected";}} ?> value="250000">250,000</option>
			<option <?php if(isset($_GET['search_max_price'])) {if($_GET['search_max_price']=="500000"){echo "selected";}} ?> value="500000">500,000</option>
			<option <?php if(isset($_GET['search_max_price'])) {if($_GET['search_max_price']=="750000"){echo "selected";}} ?> value="750000">750,000</option>
			<option <?php if(isset($_GET['search_max_price'])) {if($_GET['search_max_price']=="1000000"){echo "selected";}} ?> value="1000000">1M+</option>
		</select></td>
	</tr>
	
			<tr>
                	<td>Type:</td> 
                    <td> 
                    <select class="shadowbox" name="type1" id="selector_1">
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Any"){echo "selected";}} else {echo "selected";} ?> value="Any">Any</option>
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Residential"){echo "selected";}} ?> value="Residential">Residential</option>
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Commercial"){echo "selected";}} ?> value="Commercial">Commercial</option>
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Rural"){echo "selected";}} ?> value="Rural">Rural</option>
                      <option <?php if(isset($_GET['type1'])) {if($_GET['type1']=="Retirement villages"){echo "selected";}} ?> value="Retirement villages">Retirement villages</option>
                    </select>
                    </td>
                </tr>
                <tr>
                	<td> </td> 
                    <td> 
                    
                    <select class="shadowbox propertyType1" name="type2" id="residential2">
                      <option <?php if(isset($_GET['type2'])) {if($_GET['type2']=="Any"){echo "selected";}} else {echo "selected";} ?> value="Any">Any</option>
                      <option <?php if(isset($_GET['type2'])) {if($_GET['type2']=="For sale"){echo "selected";}} ?> value="For sale">For sale</option>
                      <option <?php if(isset($_GET['type2'])) {if($_GET['type2']=="For rent"){echo "selected";}} ?> value="For rent">For rent</option>
                    </select>
                  </td>
                </tr>
	
	<tr>
		<td>Rooms:</td>
		<td><select name="search_min_rooms" id="search_min_rooms" class="shadowbox" onChange="verifyRooms()"> 
			<option <?php if(isset($_GET['search_min_rooms'])) {if($_GET['search_min_rooms']=="0"){echo "selected";}} else {echo "selected";} ?> value="0">Any</option>
			<option <?php if(isset($_GET['search_min_rooms'])) {if($_GET['search_min_rooms']=="1"){echo "selected";}} ?> value="1">1</option>
			<option <?php if(isset($_GET['search_min_rooms'])) {if($_GET['search_min_rooms']=="2"){echo "selected";}} ?> value="2">2</option>
			<option <?php if(isset($_GET['search_min_rooms'])) {if($_GET['search_min_rooms']=="3"){echo "selected";}} ?> value="3">3</option>
			<option <?php if(isset($_GET['search_min_rooms'])) {if($_GET['search_min_rooms']=="4"){echo "selected";}} ?> value="4">4</option>
			<option <?php if(isset($_GET['search_min_rooms'])) {if($_GET['search_min_rooms']=="5"){echo "selected";}} ?> value="5">5</option>
			<option <?php if(isset($_GET['search_min_rooms'])) {if($_GET['search_min_rooms']=="6"){echo "selected";}} ?> value="6">6+</option>
		</select> to <select name="search_max_rooms" id="search_max_rooms" class="shadowbox" onChange="verifyRooms()"> 
			<option <?php if(isset($_GET['search_max_rooms'])) {if($_GET['search_max_rooms']=="0"){echo "selected";}} else {echo "selected";} ?> value="0">Any</option>
			<option <?php if(isset($_GET['search_max_rooms'])) {if($_GET['search_max_rooms']=="1"){echo "selected";}} ?> value="1">1</option>
			<option <?php if(isset($_GET['search_max_rooms'])) {if($_GET['search_max_rooms']=="2"){echo "selected";}} ?> value="2">2</option>
			<option <?php if(isset($_GET['search_max_rooms'])) {if($_GET['search_max_rooms']=="3"){echo "selected";}} ?> value="3">3</option>
			<option <?php if(isset($_GET['search_max_rooms'])) {if($_GET['search_max_rooms']=="4"){echo "selected";}} ?> value="4">4</option>
			<option <?php if(isset($_GET['search_max_rooms'])) {if($_GET['search_max_rooms']=="5"){echo "selected";}} ?> value="5">5</option>
			<option <?php if(isset($_GET['search_max_rooms'])) {if($_GET['search_max_rooms']=="6"){echo "selected";}} ?> value="6">6+</option>
		</select></td>
	</tr>
	<tr>
		<td>Bathrooms</td> <td>
		<select name="search_min_bath" id="search_min_bath" class="shadowbox" onChange="verifyBath()"> 
			<option <?php if(isset($_GET['search_min_bath'])) {if($_GET['search_min_bath']=="0"){echo "selected";}} else {echo "selected";} ?> value="0">Any</option>
			<option <?php if(isset($_GET['search_min_bath'])) {if($_GET['search_min_bath']=="1"){echo "selected";}} ?> value="1">1</option>
			<option <?php if(isset($_GET['search_min_bath'])) {if($_GET['search_min_bath']=="2"){echo "selected";}} ?> value="2">2</option>
			<option <?php if(isset($_GET['search_min_bath'])) {if($_GET['search_min_bath']=="3"){echo "selected";}} ?> value="3">3</option>
			<option <?php if(isset($_GET['search_min_bath'])) {if($_GET['search_min_bath']=="4"){echo "selected";}} ?> value="4">4</option>
			<option <?php if(isset($_GET['search_min_bath'])) {if($_GET['search_min_bath']=="5"){echo "selected";}} ?> value="5">5</option>
			<option <?php if(isset($_GET['search_min_bath'])) {if($_GET['search_min_bath']=="6"){echo "selected";}} ?> value="6">6+</option>
		</select> to <select name="search_max_bath" id="search_max_bath" class="shadowbox" onChange="verifyBath()"> 
			<option <?php if(isset($_GET['search_max_bath'])) {if($_GET['search_max_bath']=="0"){echo "selected";}} else {echo "selected";} ?> value="0">Any</option>
			<option <?php if(isset($_GET['search_max_bath'])) {if($_GET['search_max_bath']=="1"){echo "selected";}} ?> value="1">1</option>
			<option <?php if(isset($_GET['search_max_bath'])) {if($_GET['search_max_bath']=="2"){echo "selected";}} ?> value="2">2</option>
			<option <?php if(isset($_GET['search_max_bath'])) {if($_GET['search_max_bath']=="3"){echo "selected";}} ?> value="3">3</option>
			<option <?php if(isset($_GET['search_max_bath'])) {if($_GET['search_max_bath']=="4"){echo "selected";}} ?> value="4">4</option>
			<option <?php if(isset($_GET['search_max_bath'])) {if($_GET['search_max_bath']=="5"){echo "selected";}} ?> value="5">5</option>
			<option <?php if(isset($_GET['search_max_bath'])) {if($_GET['search_max_bath']=="6"){echo "selected";}} ?> value="6">6+</option>
		</select>
		</td>
	</tr>
	
	<tr>
	<td></td><td><input type="submit" name="search_button" /></td>
    </tr> 
	</table>
    </form>
	</div>
    <div class="shadowbox" id="search_result">
        	<?php 
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$max_result = 5;
					$index_result = ($page-1)*$max_result;
					
					include('db_config.php');
					
					$searchProperty = "select * from rea_properties ";
					$query = mysqli_query($myconnection,$searchProperty);
					$num_pages = floor(($query->num_rows / $max_result)) + 1;
					//echo $searchProperty."<br />";
					$searchProperty .= " limit $index_result,$max_result";
					$query = mysqli_query($myconnection,$searchProperty);
					
					if(isset($_GET['search_button'])) {
						$location = $_GET['location'];
						if($location == 'All Locations') {$location = "location like '%'";} else { $location = "location = '$location'";}
						$district = $_GET['district'];
						if($district == 'Any') {$district = "region like '%'";} else { $district = "region = '$district'";}
						$suburb = $_GET['suburb'];	
						if($suburb == 'Any') {$suburb = "district like '%'";} else { $suburb = "district = '$suburb'";}
						$search_min_price = $_GET['search_min_price'];
						if($search_min_price == '0') {$search_min_price = "price like '%'";} else { $search_min_price = "price >= {$search_min_price}";}
						$search_max_price = $_GET['search_max_price'];
						if($search_max_price == '0') {$search_max_price = "price like '%'";} else { $search_max_price = "price <= {$search_max_price}";}	
						$type1 = $_GET['type1'];
						if($type1 == 'Any') {$type1 = "type1 like '%'";} else { $type1 = "type1 = '$type1'";}
						$type2 = $_GET['type2'];
						if($type2 == 'Any') {$type2 = "type2 like '%'";} else { $type2 = "type2 = '$type2'";}
						$search_min_rooms = $_GET['search_min_rooms'];
						if($search_min_rooms == '0') {$search_min_rooms = "bedrooms like '%'";} else { $search_min_rooms = "bedrooms >= {$search_min_rooms}";}	
						$search_max_rooms = $_GET['search_max_rooms'];
						if($search_max_rooms == '0') {$search_max_rooms = "bedrooms like '%'";} else { $search_max_rooms = "bedrooms <= {$search_max_rooms}";}
						
						$search_min_bath = ($_GET['search_min_bath']=='0') ? "bathrooms like '%'" : "bathrooms >= {$_GET['search_min_bath']}";
						$search_max_bath = ($_GET['search_max_bath']=='0') ? "bathrooms like '%'" : "bathrooms <= {$_GET['search_max_bath']}";
						
						$searchProperty = "select * from rea_properties where $location and $district and $suburb and $search_min_price and $search_max_price and $type1 and $type2 and $search_min_rooms and $search_max_rooms and $search_min_bath and $search_max_bath";
						$query = mysqli_query($myconnection,$searchProperty);
						$num_pages = floor(($query->num_rows / $max_result)) + 1;
						$searchProperty .= " limit $index_result,$max_result";
						$query = mysqli_query($myconnection,$searchProperty);
						//echo $searchProperty;
						$searchQuery = $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
						//echo $searchQuery;
					}
				$row_index = 1;
			?>
        	<table>
            	<tr> 
                	<td> </td>
                    <td> <h3>Listing/Details</h3></td>
                    <td> <h3>Location</h3></td>
                    <td> <h3>Bedrooms</h3></td>
					<td> <h3>Bathrooms</h3></td>
                    <td> <h3>Price</h3></td>
                    <td> <h3>Status</h3></td>
                </tr>
            	<?php while($row = $query->fetch_assoc()) :?>
            	<tr <?php if($row_index%2==1){echo "class='row_result'";} $row_index++; ?>>
                    <td>
                    <a href="view_property_form.php?property_id=<?php echo $row['id'];?>">
                    <img class="my_property_image shadowbox" src="myImage.php?property_id=<?php echo $row['id'];?>&img_id=1" />
                    </a>
                    </td></td>
                    <td style="width:170px;">
                    <a href="view_property_form.php?property_id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a>
                    <br/>
                    <?php echo $row['details'];?>
                    </td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['bedrooms'];?></td>
					<td><?php echo $row['bathrooms'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['type2'];?></td>
                </tr>
                <?php endwhile; ?>
                <tr>
                	<td></td>
                    <?php if($num_pages > 1) : ?>
                    <td>
                    <?php 
						if($page > 1) {
								if(isset($searchQuery)) {
								echo "<a href='".$searchQuery."&page=".($page-1)."'>Previous</a> &nbsp;";
								} else {
								echo "<a href='home_form.php?page=".($page-1)."'>Previous</a> &nbsp;";	
								}
							}
						for($i = 1; $i <= $num_pages; $i++) {
							if($page == $i){
								echo $i." &nbsp;";
							} else {
								if(isset($searchQuery)) {
								echo "<a href='".$searchQuery."&page=".$i."'>".$i."</a> &nbsp;";
								} else {
								echo "<a href='home_form.php?page=".$i."'>".$i."</a> &nbsp;";
								}
								}
							}
						if($page < $num_pages) {
								if(isset($searchQuery)) {
								echo "<a href='".$searchQuery."&page=".($page+1)."'>Next</a> &nbsp;";
								} else {
								echo "<a href='home_form.php?page=".($page+1)."'>Next</a> &nbsp;";
								}
							}
					?>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <?php endif;?>
                </tr>
            </table>
        </div>
</div>
<?php
	include ("footer_form.php");
?>
</body>
</html>