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
		echo "Please SignIn First!";
		header("Refresh: 3; URL=http://localhost/REA/login_form.php");
		exit();
	}
?>
<div id="content" class="shadowbox">
		<?php if(isset($_SESSION['user_id'])) {
			include("user_nav_form.php");
				}	
		?>
       <div class="shadowbox" id="search_result">
        	<?php 
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$max_result = 5;
					$index_result = ($page-1)*$max_result;
					
					include('db_config.php');
					
					$propertyList = "select * from rea_properties where owner = {$_SESSION['user_id']}";
					$query = mysqli_query($myconnection,$propertyList);
					$num_pages = floor(($query->num_rows / $max_result)) + 1;
					
					$propertyList = "select * from rea_properties where owner = {$_SESSION['user_id']} limit $index_result,$max_result";
					$query = mysqli_query($myconnection,$propertyList);
					
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
								echo "<a = href='main_page_form.php?page=".($page-1)."'>Previous</a> ";	
							}
						for($i = 1; $i <= $num_pages; $i++) {
							if($page == $i){
								echo $i;
							} else {
								echo "<a = href='main_page_form.php?page=".$i."'>".$i."</a> ";
								}
							}
						if($page < $num_pages) {
								echo "<a = href='main_page_form.php?page=".($page+1)."'>Next</a> ";
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