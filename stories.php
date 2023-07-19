<!DOCTYPE html>
<html lang="en">
  <head>
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
            width: 70%;
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
          <h1 style="color:#fff" class="mb-3">Success Stories</h1>
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
  </head>
  <body>
    <!-- Start your project here-->
    <div class="card mb-3">
        <img src="https://www.helptostudy.com/wp-content/uploads/2018/09/University-of-Oxford-Acceptance-Rate.jpg" class="card-img-top" alt="Wild Landscape"/>
        <div class="card-body">
          <h5 class="card-title">Journey to Oxford University</h5>
          <p class="card-text">
            Anjali Sarker is a current 2019-20 Skoll Scholar on the Oxford MBA. She is passionate about empowering women’s rights through economic opportunity. She reflects on her impact journey so far and what led her to Oxford.

It was a hot summer afternoon in 2014. A group of middle-aged women were sitting under a tree, giving me and my colleague a very skeptical look as we were trying to explain how mobile payments could possibly make their lives easier. They did not seem to be convinced at all, for good reasons; at least for reasons that were valid to them.
          </p>
          <p class="card-text">
            <small class="text-muted">Story of Shahed Ahmed</small>
          </p>
        </div>
      </div>
      <div class="card mb-3">
        <img src="https://image.cnbcfm.com/api/v1/image/106634080-1595868062406-GettyImages-1207206237.jpg?v=1629124528" class="card-img-top" alt="Wild Landscape"/>
        <div class="card-body">
          <h5 class="card-title">Software Engineer at Google</h5>
          <p class="card-text">
            Uday said, "I grew up using different Microsoft products. It was my childhood dream to work for a giant company, and the scope of working at Microsoft is overwhelming."General Secretary of Cuet Teachers' Association and Associate Professor at the Department of Mechanical Engineering Dr Md Sanaul Rabbi said several Cuet students had got a job at Google before.
          </p>
          <p class="card-text">
            <small class="text-muted">Story of Tanvir H Uday</small>
          </p>
        </div>
      </div>
    <!-- End your project here-->
    <form action="success_story.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <div class="form-outline mb-4">
          <input type="text" name="name" id="form4Example1" class="form-control" />
          <label class="form-label" for="form4Example1">Name</label>
        </div>
      
        <!-- Email input -->
    
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" name="story" id="form4Example3" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Story</label>
        </div>
      
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4"  checked />
          <label class="form-check-label" for="form4Example4">
            Send me a copy of this message
          </label>
        </div>
      
        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      
    <!-- <input type="submit" name="submit" value="Upload"> -->
</form>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
