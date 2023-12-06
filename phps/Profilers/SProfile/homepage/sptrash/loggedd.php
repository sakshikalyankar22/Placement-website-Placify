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
  <title>Placify (CPMS)</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">

    <!-- <nav id="mainNav" class="navbar navbar-default" style="background:black ;">  -->
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">
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
            <a class="nav-link text-white" href="../homepage/Placify/sk.php">Announcements</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="../homepage/pp/index1.php">Companies</a>
            <!-- <a class="nav-link text-white" aria-disabled="true">Companies</a> -->
          </li>
        </ul>

        <!-- Center-align the search box -->
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <button class="btn btn-outline-secondary dropdown-toggle text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile</button>
      </div>
  </nav>

  <!-- offcanvas start -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">First_name last_name</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      <!-- collapse start -->
      <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
          <svg class="bi me-2" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
          <span class="fs-5 fw-semibold">Settings</span>
        </a>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
            <h4>Home</h4>
            </button>
            <div class="collapse" id="home-collapse" style="width: 280px;">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded"><h5>Overview</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Updates</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Reports</h5></a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              <h4>Dashboard</h4>
            </button>
            <div class="collapse" id="dashboard-collapse" style="width: 280px;">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded"><h5>Overview</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Weekly</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Monthly</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Annually</h5></a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
             <h4> Orders</h4>
            </button>
            <div class="collapse" id="orders-collapse" style="width: 280px;">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded"><h5>New</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Processed</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Shipped</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Returned</h5></a></li>
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
                <li><a href="#" class="link-dark rounded"><h5>New...</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Profile</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Settings</h5></a></li>
                <li><a href="#" class="link-dark rounded"><h5>Sign out</h5></a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- collapse end -->
    </div>
  </div>
  </div>
  <!-- offcanvas end -->

  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1400x400/?nature,water" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x400/?nature,tree" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x400/?nature,animals" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Modal -->
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

  <!-- Header -->

  <header>
    <div class="header-content">
      <div class="header-content-inner">
        <h1>GUIDING FUTURES, ON CAMPUS</h1>
        <hr>
        <p><b>We are here to Build your Skills and Career with our Driven Passion and Reality.<br>Click Below to Get
            Our Current Drive Details</b></p>
        <p><b></b></p>
        <a href="../Drives/index.php" class="btn btn-primary btn-xl page-scroll">Current Drives</a>
      </div>
    </div>
  </header>


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
            <a href="../homepage/study/smt.php" class="btn btn-primary">click here</a>
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
            <a href="#" class="btn btn-primary">click here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Cards Section -->

  <!-- Footer Section -->
  <div class="footer" style="background:black">
    <!-- ... (rest of your footer code) ... -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 ftr_navi">
          <h3>NAVIGATION</h3>
          <ul>
            <li>
              <a href="../homepage/index.php">
                <h5>Home</h5>
              </a>
            </li>
            <li>
              <a href="../Profilers/SProfile/index.php">
                <h5>Student Login</h5>
              </a>
            </li>
            <!-- <li>
              <a href="../Profilers/PProfile/index.php">
                <h5>Placement Login</h5>
              </a>
            </li>
            <li>
              <a href="../Profilers/HODProfile/index.php">
                <h5>HOD Login</h5>
              </a>
            </li>
            <li> -->
            <a href="../Profilers/Priprofile/index.php">
              <h5>Administrative Login</h5>
            </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 ftr_navi">
          <h3>MEMBERS</h3>
          <ul>
            <li>
              <a href="#">
                <h5>Feedback</h5>
              </a>
            </li>
            <li>
              <a href="#">
                <h5>Placement Support</h5>
              </a>
            </li>
            <li>
              <a href="#">
                <h5>Faculty Support</h5>
              </a>
            </li>
            <li>
              <a href="#">
                <h5>Companies</h5>
              </a>
            </li>
            <li>
              <a href="#">
                <h5>Training</h5>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 get_in_touch ftr">
          <h3>Contact us</h3>
          <p>SGGS</p>
          <p>vishnupuri, nanded, India</p>
          <p>83019-79790/221456</p>
          <a href="mailto:hajareamey07@gmail.com">hajareamey07@gmail.com</a>
        </div>
        <div class="col-md-3 ftr-logo text-white">
          <p>Copyright &copy; 2023 | Developed by
            TEAM-PLACIFY
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </ul>
  </div>
  <!-- <div class="col-md-3 get_in_touch">
        <h3>GET IN TOUCH</h3>
        <p>SGGS</p>
        <p>Vishnupuri, Nanded, India</p>
        <p>83019-79790/221456</p>
        <a href="mailto:hajareamey07@gmail.com">hajareamey07@gmail.com</a>
      </div>
       <div class="col-md-3 ftr-logo">
        <p>Copyright &copy; 2023 | Developed by TEAM-PLACIFY</p>
      </div> -->
  </div>
  </div>
  </div>
  <!-- End of Footer Section -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>




<!-- useless -->
<!-- offcanvas -->
<!-- <div class = "offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebar-label">My OTheer boodks</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Dolore cum iusto quaerat s0
              int. Harum unde magnam ut, saepe ad placeat? 
              Blanditiis alias obcaecati illum dolores exercitationem placeat 
              possimus labore atque?
          </div>
        </div> -->