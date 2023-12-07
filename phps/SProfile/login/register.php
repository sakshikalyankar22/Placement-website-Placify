<!DOCTYPE html>
<html lang="en">

<head>
	<!--favicon-->
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/icon"> -->
	<!-- <link rel="icon" href="favicon.ico" type="image/icon"> -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<title>Student Register</title>
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'> -->
	<!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="css/templatemo-style.css" rel="stylesheet"> -->
	<!-- Footer -->
	<link type="text/css" rel="stylesheet" href="../../homepage/css/style.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<!-- <header> -->

<body class="light-gray-bg">

	<div class="templatemo-content-widget templatemo-login-widget white-bg">
		<header class="text-center">
			<div class="square"></div>
			<h1>Student Register</h1>
		</header>
	</div>
	<div class="templatemo-content-widget templatemo-login-widget white-bg">

		<form method="POST" class="templatemo-login-form" action="reg.php">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
					<input type="text" name="Fullname" class="form-control" placeholder="FullName*">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
					<input type="text" name="USN" class="form-control" placeholder="USN*">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
					<input type="password" name="PASSWORD" class="form-control" placeholder="******">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
					<input type="password" name="repassword" class="form-control" placeholder="Retype Password">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
					<input type="text" name="Email" class="form-control" placeholder="Email*">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
					<select type="text" name="Question" class="form-control" placeholder="Security Question*">
						<option value="What is your nickname?">What is your nickname?</option>
						<option value="What is your fav spot?">What is your fav spot?</option>
						<option value="What is your fav dish?">What is your fav dish?</option>
						<option value="What is your dream land address?">What is your dream land address?</option>
						<option value="What is your first mobile number?">What is your first mobile number?</option>
						<option value="What is your one truth which ohers donot know?">What is your one truth which ohers donot know?</option>
						<option value="What is your detained years in life?">What is your detained years in life?</option>
						<option value="What is your enemy name?">What is your enemy name?</option>
						<option value="What is your pet name?">What is your petname?</option>
				</div>

			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
					<input type="text" name="Answer" class="form-control" placeholder="Answer*">
				</div>
			</div>


			<div class="form-group">
				<button type="submit" name="submit" class="templatemo-blue-button width-100">Register</button>
			</div>
		</form>
	</div>

	<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
		<p>Have an Account? <strong><a href="sloginform.php" class="blue-text">Sign in here!</a></strong></p>
	</div>

	<!-- </header> -->


	<!--footer-->
	<div class="footer" style="background:black">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-2 mb-3 text-white">
					<h5>NAVIGATION</h5>
					<ul class="nav flex-column text-white">
						<li class="nav-item mb-2"><a href="../../../homepage/home7.php" class="nav-link p-0 text-white">Home</a></li>
						<li class="nav-item mb-2"><a href="../login/sloginform.php" class="nav-link p-0 text-white">Student login</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Administrative login</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
					</ul>
				</div>

				<div class="col-6 col-md-2 mb-3 text-white">
					<h5>HELP</h5>
					<ul class="nav flex-column text-white">
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Placement Support</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Faculty Support</a></li>
						<li class="nav-item mb-2"><a href="../../../homepage/pp/index1.php" class="nav-link p-0 text-white">Companies</a></li>
						<li class="nav-item mb-2"><a href="../../../homepage/study/smt.php" class="nav-link p-0 text-white">Training</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Feedback</a></li>
					</ul>
				</div>

				<div class="col-6 col-md-2 mb-3 text-white">
					<h5>Contact us</h5>
					<p>SGGS</p>
					<p>vishnupuri, Nanded, India</p>
					<p>83019-79790/221456</p>
					<a href="mailto:hajareamey07@gmail.com">placify@gmail.com</a>

				</div>

				<div class="col-md-5 offset-md-1 mb-3 text-white">
					<form>
						<h5>Subscribe to Pro Placify</h5>
						<p>Get direct contact with Alumini...</p>
						<div class="d-flex flex-column flex-sm-row w-100 gap-2">
							<label for="newsletter1" class="visually-hidden">Email address</label>
							<input id="newsletter1" type="text" class="form-control" placeholder="Email address">
							<button class="btn btn-primary" type="button">Subscribe</button>
						</div>
					</form>
				</div>
			</div>

			<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-white">
				<p>© 2023 Team Placify, Inc. All rights reserved.</p>
				<ul class="list-unstyled d-flex">
					<li class="ms-3"><a class="link-body-emphasis" href="https://www.linkedin.com/">
							<img src="images/linkedin.png" alt="mdo" width="24" height="24" class="rounded-circle">
					</li>
					<li class="ms-3"><a class="link-body-emphasis" href="https://www.twitter.com/">
							<img src="images/x.png" alt="mdo" width="24" height="24" class="rounded-circle">
						</a></li>
					<li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/">
							<img src="images/facebook.webp" alt="mdo" width="24" height="24" class="rounded-circle">
						</a></li>
				</ul>
			</div>
			</footer>
		</div>
		<!-- End of Footer Section -->


		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
















<!--<
// define variables and set to empty values
$nameErr = $usnErr = $passErr = $emailerr = $Qerr = $Anserr = "";
$Name = $USN = $password = $repassword = $Email = $Question = $Answer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["Fullname"])) {
     $nameErr = "Name is required";
   } else {
     $Name = test_input($_POST["Fullname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }

	if (empty($_POST["USN"])) {
     $usnErr = "USN is required";
   } else {
     $USN = test_input($_POST["USN"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/[a-zA-Z0-9]*$/",$USN)) {
       $nameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["password"])) {
     $passErr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     }

   if (empty($_POST["repassword"])) {
     $passErr = "Feild is required";
   } else {
     $repassword = test_input($_POST["repassword"]);
   }

   if (empty($_POST["Email"])) {
     $emailErr = "Email is required";
   } else {
     $Email = test_input($_POST["Email"]);
     // check if e-mail address is well-formed
     if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }

     $Question = ($_POST["Question"]);

    if (empty($_POST["Answer"])) {
     $AnsErr = "Answer is required";
   } else {
     $Answer = test_input($_POST["Answer"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Answer)) {
       $nameErr = "Only letters and white spaces allowed";
     }
   }
}

   function test_input($data)
   {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
   $connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
  		mysql_select_db("placement") or die("Cant Connect to database"); // Selecting Database from Server

		$check = mysql_query("SELECT * FROM slogin WHERE USN='".$USN."'") or die("Check Query");
 		if(mysql_num_rows($check) == 0)
 		{
  			if($repassword == $password)
  			{
    			if($query = mysql_query("INSERT INTO slogin(Name,USN,PASSWORD,Email,Question,Answer) VALUES ('$Name','$USN','$password','$Email','$Question','$Answer')"))
    			{
					$message = " You have registered successfully...!!";
  					echo "<script type='text/javascript'>alert('$message');</script>";
                    //echo "<center> You have registered successfully...!! Go back to  </center>";
					//echo "<center><a href='index.php'>Login here</a> </center>";
    			}
  			}
   			else
    		{
      			// echo "<center>Your Password don't Match</center>";
				$message = "Your Password don't Match";
  				echo "<script type='text/javascript'>alert('$message');</script>";
    		}
   		}
   		else
   		{
       		//echo "<center>This USN already exists</center>";
			$message = "This USN already exists/Dont Leave any Field Blank";
  			echo "<script type='text/javascript'>alert('$message');</script>";

		}-->












<!--<
// define variables and set to empty values
$nameErr = $usnErr = $passErr = $emailerr = $Qerr = $Anserr = "";
$Name = $USN = $password = $repassword = $Email = $Question = $Answer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["Fullname"])) {
     $nameErr = "Name is required";
   } else {
     $Name = test_input($_POST["Fullname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }

	if (empty($_POST["USN"])) {
     $usnErr = "USN is required";
   } else {
     $USN = test_input($_POST["USN"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/[a-zA-Z0-9]*$/",$USN)) {
       $nameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["password"])) {
     $passErr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     }

   if (empty($_POST["repassword"])) {
     $passErr = "Feild is required";
   } else {
     $repassword = test_input($_POST["repassword"]);
   }

   if (empty($_POST["Email"])) {
     $emailErr = "Email is required";
   } else {
     $Email = test_input($_POST["Email"]);
     // check if e-mail address is well-formed
     if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }

     $Question = ($_POST["Question"]);

    if (empty($_POST["Answer"])) {
     $AnsErr = "Answer is required";
   } else {
     $Answer = test_input($_POST["Answer"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Answer)) {
       $nameErr = "Only letters and white spaces allowed";
     }
   }
}

   function test_input($data)
   {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
   $connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
  		mysql_select_db("placement") or die("Cant Connect to database"); // Selecting Database from Server

		$check = mysql_query("SELECT * FROM slogin WHERE USN='".$USN."'") or die("Check Query");
 		if(mysql_num_rows($check) == 0)
 		{
  			if($repassword == $password)
  			{
    			if($query = mysql_query("INSERT INTO slogin(Name,USN,PASSWORD,Email,Question,Answer) VALUES ('$Name','$USN','$password','$Email','$Question','$Answer')"))
    			{
					$message = " You have registered successfully...!!";
  					echo "<script type='text/javascript'>alert('$message');</script>";
                    //echo "<center> You have registered successfully...!! Go back to  </center>";
					//echo "<center><a href='index.php'>Login here</a> </center>";
    			}
  			}
   			else
    		{
      			// echo "<center>Your Password don't Match</center>";
				$message = "Your Password don't Match";
  				echo "<script type='text/javascript'>alert('$message');</script>";
    		}
   		}
   		else
   		{
       		//echo "<center>This USN already exists</center>";
			$message = "This USN already exists/Dont Leave any Field Blank";
  			echo "<script type='text/javascript'>alert('$message');</script>";

		}-->