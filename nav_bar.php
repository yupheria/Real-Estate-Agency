<div id="navbar" class="shadowbox searchbox">
	<ul>
		<li class="shadowbox"><a href="home_form.php">Home</a></li>
        <?php if(!isset($_SESSION['user_id'])) {?>
		<li class="shadowbox"><a href="registration_form.php">Seller</a></li>
		<li class="shadowbox"><a href="registration_form.php">Buyer</a></li>
        <?php } else {?>
        <li class="shadowbox"><a href="main_page_form.php">My Properties</a></li>
        <?php } ?>
		<li class="shadowbox"><a href="contact_us_form.php">Contact Us</a></li>
	</ul>
</div>