<?php 
	session_start();
  	if (isset($_SESSION['username'])){
		header("location: ../homepage/postlogin.php");
		// header("location: login.php");
	}	 
 ?>