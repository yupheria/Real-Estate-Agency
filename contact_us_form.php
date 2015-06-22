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
	<ul>
    <li>
	<div id="contact_box" class="shadowbox">
    	Bjorn Gronberg <br />
    	Wellington Institute of Technology (WelTec) Petone Campus <br />
		Buick St <br />
		Petone <br />
		Lower Hutt 5012 <br /> &nbsp;
        <br /> Feedback: <br />
        <form action="myFeedback.php" method="post">
        Name: &nbsp;&nbsp;&nbsp;<input class="shadowbox" type="text" name="feedback_name"/><br />
        Contact: <input class="shadowbox" type="text" name="feedback_contact"/><br /> &nbsp;<br/>
        <input type="radio" name="feedback_mark" value="Excellent" />Excellent <br />
        <input type="radio" name="feedback_mark" value="Good"/>Good <br />
        <input type="radio" name="feedback_mark" value="OK"/>OK <br />
        <input type="radio" name="feedback_mark" value="Bad"/>Bad <br />
        <input type="submit" />
        </form>
    </div>
    </li>
    <li>
    <div>
    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1500.455884085838!2d174.8845379!3d-41.2236932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38abb920c847a1%3A0x848f24accf17f59c!2sWellington+Institute+of+Technology+(WelTec)%2C+Petone+Campus!5e0!3m2!1sen!2snz!4v1429577988187" width="600" height="450" frameborder="0" style="border:0"></iframe>
    </div>
    </li>
    </ul>
</div>
<?php
	include ("footer_form.php");
?>
</body>
</html>