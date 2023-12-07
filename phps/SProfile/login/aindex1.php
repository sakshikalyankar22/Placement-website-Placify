<?php 
	session_start();
  	if (isset($_SESSION['username'])){
		header("location: ../../homepage/admin/ahome.php");
		// header("location: login.php");
	}	 
 ?>