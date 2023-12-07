<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username && $password)
	{
		$connect = mysqli_connect("localhost", "root", "amey_Hajare@#", "placement") or die("Couldn't Connect");
		mysqli_select_db($connect, "placement") or die("Can't find DB");

		$query = $connect->query("SELECT * FROM slogin WHERE USN='$username'");

		$numrows = $query->num_rows;

		if ($numrows != 0)
		{
			while ($row = $query->fetch_assoc())
			{
				$dbusername = $row['USN'];
				$dbpassword = $row['PASSWORD'];
			}
			if ($username == $dbusername && $password == $dbpassword)
			{
				echo "<center>Login Successful..!! <br/>Redirecting you to the HomePage! </br>If not, go to <a href='index.php'>Here</a></center>";
				echo "<meta http-equiv='refresh' content='3; url=../homepage/postlogin.php'>";
				$_SESSION['username'] = $username;
				
			}
			else
			{
				$message = "Username and/or Password incorrect.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<center>Redirecting you back to the Login Page! If not, go to <a href='index.php'>Here</a></center>";
				echo "<meta http-equiv='refresh' content='1; url=sloginform.php'>";
			}
		}
		else
			die("User does not exist");
	}
	else
		die("Please enter USN and Password");
?>
