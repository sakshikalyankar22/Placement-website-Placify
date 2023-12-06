<?php
	session_start();
	session_destroy();
	
	header("location: sloginform.php");
	echo"You have been Logged out <a href='sloginform.php'>Click here to login</a>";
	?>