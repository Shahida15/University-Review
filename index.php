
<!DOCTYPE html>
<?php
include("liveseach.php");

$user = 'rooti';

$password = '';
$database = 'csetest';
$servername = 'localhost';
$mysqli = new mysqli($servername, $user,  $password, $database);

if ($mysqli->connect_error) {

  die('Connect Error (' .

    $mysqli->connect_errno . ') ' .

    $mysqli->connect_error);
}
$sql = "SELECT * FROM reviews  ";

$result = $mysqli->query($sql);

$mysqli->close();

?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>University Program Review</title>



  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2//css/bootstrap.min.css">

  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />



  <style>
    .row {
      padding: 10px !important;
    }
    .card  {
            height: 500px;
           
           overflow: hidden;
           text-overflow: ellipsis;
            align-content: center;
            margin-top: 10px;
            margin-left: 10px;
            
            
        }
        .card:hover {
          height: 100%;
  background-color: yellow;
}     

    .button {
      color: #000;
    }
    

    /* div#extra {
            float: left;
            width: 25%;
            margin-left: -25%;
        } */


    #searchresult {
      background-color: #FFA500;
      position: fixed;
      /* margin-top: 10px; */
      margin-right: 45px;
      border: 1px solid #fff;


    }
  </style>



  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UniReview</a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

  <div class="p-5 text-center bg-image" style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
    ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 style="color:#fff" class="mb-3">Undergraduate Program Reviews!</h1>
          <h4 style="color:#fff"  class="mb-3">Search your university</h4>

          <div class="input-group rounded">

            <div class="container" style="max-width: 50%;">
              <input type="text" class="form-control rounded" id="live_search" placeholder="Search......." aria-label="Search" aria-describedby="search-addon" />
              <div id="searchresult"></div>
            </div>
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
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

  <!-- Start your project here-->
  <br><br><br><br><br><br>
  <div class="ddd ">
    <div class="row">
    <div class="col-sm-9">
    <div class="row">
      <?php   // LOOP TILL END OF DATA  

      while ($rows = $result->fetch_assoc()) {
      ?>

        <div class="card" style="width: 18rem;padding: 10;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $rows['name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $rows['department']; ?></h6>
            <p class="card-text"><?php echo $rows['dates']; ?></p>
            <p class="card-text">Faculty Review.</p>
            <p class="card-text">University Name: North South University.</p>
            <p class="card-text"><?php echo $rows['review']; ?></p>
            <a href="#" class="card-link">view details</a>

          </div>
        </div>
      <?php
      }
      ?>
      </div>
    </div>
    



 
  <div class="col-sm-2">
  <div class='dgf' id="extra">
  <?php session_start();
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
?>
    <form style="float:right" action="add_review.php" method="post">
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" name="name" id="form4Example1" class="form-control" />
        <label class="form-label" for="form4Example1">Name</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" name="department" id="form4Example2" class="form-control" />
        <label class="form-label" for="form4Example2">Department</label>
      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
        <textarea class="form-control" name="review" id="form4Example3" rows="4"></textarea>
        <label class="form-label" for="form4Example3">Review</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
        <label class="form-check-label" for="form4Example4">
          Send me a copy of this message
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
    <?php }else { ?>
 <span>"Log In/Sign Up to Post"</span>
<?php } ?>
  </div>
    </div>
    </div>


  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>




  <!-- Google Jequery CDN w3schools -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- Custom scripts -->
  <script type="text/javascript">
    $(document).ready(function() {

      $("#live_search").keyup(function() {

        var input = $(this).val();
        //alert(input);

        if (input != "") {
          $.ajax({
            url: "livesearch.php",
            method: "POST",
            data: {
              input: input
            },

            success: function(data) {
              $("#searchresult").html(data);
            }
          });
        } else {
          $("#searchresult").css("display", "none");
        }
      });
    });
  </script>

  </body>

</html>