<?php
session_start();
if ($_SESSION["username"]) {
} else {
    header("location: sloginform.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/creative2.css" type="text/css">
    <!-- Footer -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min0.css" type="text/css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Placify</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">

        <!-- <nav id="mainNav" class="navbar navbar-default" style="background:black ;">  -->
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../../../homepage/home7.php">
                <img class="d-inline-block align-top" src="images/icon2.png" width="30" height="30" alt="Icon" />
                PLACIFY
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <!-- <a class="nav-link text-white">Announcements</a> -->
                        <a class="nav-link text-white" href="Placify/sk.php">Announcements</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="pp/index1.php">Companies</a>
                        <!-- <a class="nav-link text-white" aria-disabled="true">Companies</a> -->
                    </li>
                </ul>

                <!-- Center-align the search box -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <a class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="offcanvas" href="#offcanvasRight" aria-expanded="false" data-bs-target="#offcanvasRightWithBothOptions" aria-controls="offcanvasRightWithBothOptions">
                    <img src="images/profile.png" alt="mdo" width="24" height="24" class="rounded-circle">
                </a>

            </div>
        </div>
    </nav>


    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRightWithBothOptions" aria-labelledby="offcanvasRightWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightWithBothOptionsLabel">
                <?php
                $Welcome = "Welcome..!";
                echo "<h1>" . $Welcome . "<br>" . $_SESSION['username'] . "</h1>";
                ?>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <!-- Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc. -->
            </div>
            <!-- collapse start -->
            <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                    <svg class="bi me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <!-- <span class="fs-5 fw-semibold">Settings</span> -->
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            <h4>Details</h4>
                        </button>
                        <div class="collapse" id="home-collapse" style="width: 280px;">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">
                                        <h5>Profile</h5>
                                    </a></li>
                                <li><a href="pp/graph.php" class="link-dark rounded">
                                        <h5>Stats</h5>
                                    </a></li>
                                <li><a href="#" class="link-dark rounded">
                                        <h5>Certificate</h5>
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            <h4> For You!</h4>
                        </button>
                        <div class="collapse" id="orders-collapse" style="width: 280px;">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">
                                        <h5>Notice</h5>
                                    </a></li>
                                <li><a href="#" class="link-dark rounded">
                                        <h5>Recommendation</h5>
                                    </a></li>
                                <!-- <li><a href="#" class="link-dark rounded">
                                        <h5>Shipped</h5>
                                    </a></li>
                                <li><a href="#" class="link-dark rounded">
                                        <h5>Returned</h5>
                                    </a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            <h4> Account</h4>
                        </button>
                        <div class="collapse" id="account-collapse" style="width: 280px;">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="../login/ForgotPassword.php" class="link-dark rounded">
                                        <h5>Change Password</h5>
                                    </a></li>
                                <li><a href="../login/logout.php" class="fa fa-eject fa-fw">
                                        <h5>logout</h5>
                                    </a></li>
                                <!-- <li><a href="../logout.php" class="link-dark rounded"><h5>logout</h5></a></li> -->
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- collapse end -->
        </div>
    </div>
    <!-- offcanvas end -->


    <!-- carousel start -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1400x400/?nature,water" class="d-block w-100" alt="...">
                <div class="carousel-caption text-start">
                    <h5>Event 1</h5>
                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?nature,tree" class="d-block w-100" alt="...">
                <div class="carousel-caption text-start">
                    <h5>Event 2</h5>
                    <!-- <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?nature,animals" class="d-block w-100" alt="...">
                <div class="carousel-caption text-start">
                    <h5>Event 3</h5>
                    <!-- <p>Some representative placeholder content for the third slide.</p> -->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- carousel end -->



    <!-- Modal start -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signupModalLabel">SIGN UP AS</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a href="../Profilers/SProfile/register.php"><b>
                            <h5>Student</h5>
                        </b></a><br>
                    <a class="dropdown-item text-red" href="#"><b>
                            <h5>HOD</h5>
                        </b></a><br>
                    <a class="dropdown-item text-red" href="#"><b>
                            <h5>Administrative</h5>
                        </b></a><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->


    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>GUIDING FUTURES, ON CAMPUS</h1>
                <hr>
                <p><b>We are here to Build your Skills and Career with our Driven Passion and Reality.<br>Click Below to Get
                        Our Current Drive Details</b></p>
                <p><b></b></p>
                <a href="pp/index1.php" class="btn btn-primary btn-xl page-scroll">Current Drives</a>
            </div>
        </div>
    </header>
    <!-- Header -->

    <!-- Cards Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x400/?Graphs" class="card-img-top" alt="Computer Science">
                    <!-- <img src="https://api.unsplash.com/400x400/?Graphs" class="card-img-top" alt="Computer Science"> -->
                    <div class="card-body">
                        <h5 class="card-title">Past Placements</h5>
                        <p class="card-text">Check placement records of past years and analysis</p>
                        <a href="#" class="btn btn-primary">Click here</a>
                        <!-- <a href="https://sggsplacements.in/placements" class="btn btn-primary">Click here</a> -->
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x400/?Study" class="card-img-top" alt="Business">
                    <div class="card-body">
                        <h5 class="card-title">Study plan</h5>
                        <p class="card-text">Explore career opportunities in the business world</p>
                        <a href="study/smt.php" class="btn btn-primary">click here</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/400x400/?contact" class="card-img-top" alt="Engineering">
                    <div class="card-body">
                        <h5 class="card-title">Contact us</h5>
                        <p class="card-text">Discover engineering career paths and placement information</p>
                        <a href="jw/about.php" class="btn btn-primary">click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Cards Section -->

    <!-- Footer Section -->
    <!-- <div class="container border-top">
        <footer class="py-5" style="background:black">
            <div class="row"> -->
    <div class="footer" style="background:black">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2 mb-3 text-white">
                    <h5>NAVIGATION</h5>
                    <ul class="nav flex-column text-white">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="../login/sloginform.php" class="nav-link p-0 text-white">Student login</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Administrative login</a></li>
                        <li class="nav-item mb-2"><a href="Placify/college.php" class="nav-link p-0 text-white">Guidance</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3 text-white">
                    <h5>HELP</h5>
                    <ul class="nav flex-column text-white">
                        <li class="nav-item mb-2"><a href="placify/alumni.php" class="nav-link p-0 text-white">Alumni Support</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Faculty Support</a></li>
                        <li class="nav-item mb-2"><a href="pp/index1.php" class="nav-link p-0 text-white">Companies</a></li>
                        <li class="nav-item mb-2"><a href="study/smt.php" class="nav-link p-0 text-white">Training</a></li>
                        <li class="nav-item mb-2"><a href="jw/feedback.php" class="nav-link p-0 text-white">Feedback</a></li>
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

        <!-- End of Footer Section -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>