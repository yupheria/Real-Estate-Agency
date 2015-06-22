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
					$row = $query->fetch_assoc();
					if($row['owner']!=$_SESSION['user_id']) {
						echo "You do not own this property! <br /> Returning after 3 seconds";
						header('Refresh: 3; URL=http://localhost/REA/main_page_form.php');
						exit();
					}
			?>
        	Are you sure you want to delete this property? <br />
            <a href="myDeleteProperty.php?property_id=<?php echo $_GET['property_id'];?>">Yes</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="view_property_form.php?property_id=<?php echo $_GET['property_id']?>">No</a>
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