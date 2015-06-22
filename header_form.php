<div id="header" class="shadowbox">
	<div><img id="headerlogo" src="Estate Logo.jpg"/> </div>
    <?php session_start(); ?>
	<?php if(isset($_SESSION['login_user'])) { ?>
    <div id="signName" class="shadowbox">
    <a href="editUser_form.php">
    <?php echo $_SESSION['first_name']." ".$_SESSION['last_name'];?>
    </a>
    </div>
    <div id="signOut" class="shadowbox"><a href="mySignOut.php">SignOut</a></div>
    <?php } else {?>
    <div id="signUp" class="shadowbox"><a href="registration_form.php">SignUp</a></div>
    <div id="signIn" class="shadowbox"><a href="login_form.php">SignIn</a></div>
    <?php } ?>
</div>