<?php
  session_start();
  if($_SESSION["username"]){
  }
   else {
	   header("location: ../../login/sloginform.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Level Support</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #b5d1e3;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            place-items: center;
            justify-content: center;
            min-height: 100vh; /* Set the minimum height to the viewport height for vertical centering */
        }

        .content {
            max-width: 800px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center-align text within the content div */
            background-color: rgb(225, 234, 243);
        }

        .paragraphs {
            max-width: 800px;
            text-align: justify;
            margin-bottom: 20px;
            
        }

        h1 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center; /* Center-align cards horizontally */
        }

        .card {
            max-width: 300px;
            border: 1px solid #ddd;
            transition: transform 0.3s ease-in-out;
        }

        .card-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            overflow-x: auto;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .card-body {
            padding: 10px;
        }

        iframe {
            width: 100%;
            height: 180px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="paragraphs">
            <h1>Welcome to Our College Student Website!</h1>
            <p>We are excited to enhance your learning experience. Explore our collection of video lectures designed to supplement your academic journey. Whether you're preparing for interviews, seeking career advice, or diving into technical subjects, our video lectures provide valuable insights and guidance.</p>
            <p>Empower yourself with knowledge, sharpen your skills, and stay ahead in your academic and professional pursuits. Feel free to browse through our video library and make the most of the resources available to you.</p>
            <p>Happy learning!</p>
        </div>

        <div class="cards">
            <!-- Video cards here -->
            <div class="card">
                <div class="card-header">
                    <h2>CSE Alumni</h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/RHNsJTNGY8U" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Add more cards here as needed -->
            <div class="card">
                <div class="card-header">
                    <h2>GAFAM companies</h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/24b9M3-F13o" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Internship related</h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/rbg6i-XpNY8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Skills Upgradation I</h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/U9qFdZCeeIE" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h2>Entrepreneurship</h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/2lR_v312ZN0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Skills Upgradation II </h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/lZXUHQDG_S0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Textile Placement</h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/C6c4x53M9D4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

           

            <div class="card">
                <div class="card-header">
                    <h2>Government Exams</h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/t43kRH58d3Y" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Guidance Session </h2>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/dis5_UXzDMc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Additional paragraph below the cards -->
        <div class="paragraphs">
            <p>Thank you for exploring our video library! We hope these resources contribute to your educational journey. Remember, learning is a continuous process, and we're here to support your academic growth. Keep discovering and embracing knowledge.</p>
        </div>
    </div>
</body>

</html>