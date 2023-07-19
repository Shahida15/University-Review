<!DOCTYPE html>

<html lang="en">
  <head>
  <?php
  require_once "config.php";
  ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>University Program Review</title>

    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
        .formclass{
            margin-top:2%;
            margin-left: 4%;
            margin-right:4%;
        }
        .card  {
            width: 30%;
            padding: 20px !important;
            align-self: center;
            align-content: center;
            margin-top: 20px;
            margin-left: 80px;
            
        }
      .row {
       padding: 20px !important;
      }
      .button {
        color: #000;
      }
    </style>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">UniReview</a>
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forum.php">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="material.php">Study Material</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stories.php">Success Stories</a>
              </li>
              <?php session_start();
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
?>
<li class="nav-item">
              <a class="nav-link" href="logout.php">Log out</a>
            </li>
     
<?php }else { ?>
  <li class="nav-item">
              <a class="nav-link" href="registration.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
<?php } ?>
            <!-- <li class="nav-item">
              <a class="nav-link disabled"
                >Disabled</a
              >
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 style="color:#fff" class="mb-3">Buy Material!</h1>
          <h4 style="color:#fff" class="mb-3">Search your university</h4>
        
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
            <div class="dropdown">
              <button
                class="btn btn-primary dropdown-toggle"
                type="button"
                id="dropdownMenuButton"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                Select Program
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Computer Science</a></li>
                <li><a class="dropdown-item" href="#">Electrical Engineering</a></li>
                <li><a class="dropdown-item" href="#">Civil</a></li>
              </ul>
            </div>
            </div>
            
          </div>
      </div>
     
    </div>
  </div>
  <?php

   $select = mysqli_query($link, "SELECT * FROM products");
   
   ?>
  </head>
  <body>
    <!-- Start your project here-->
    <div class="row" >
    <?php while($row = mysqli_fetch_assoc($select)){ ?>
    <div class="card">
    <img src="project/uploaded_img/<?php echo $row['image']; ?>" height="350" alt="">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['name']; ?></h5>
          <p class="card-text">$<?php echo $row['price']; ?>/-</p>
          <a href="checkoutconnect.php?price=<?php echo 100?>" class="btn btn-primary">Buy</a>
        </div>
      </div>
      <?php } ?>
      
    </div>
      
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
