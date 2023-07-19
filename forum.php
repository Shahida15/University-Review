<!DOCTYPE html>
<?php
$user = 'rooti'; 

$password = '';  
$database = 'csetest';  
$servername='localhost';
$mysqli = new mysqli($servername, $user,  

                $password, $database); 

                if ($mysqli->connect_error) { 

                    die('Connect Error (' .  
                
                    $mysqli->connect_errno . ') '.  
                
                    $mysqli->connect_error); 
                } 
                $sql = "SELECT * FROM forum  "; 

$result = $mysqli->query($sql); 

$mysqli->close(); 

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>University Program Review</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/904459e2f5.js" crossorigin="anonymous"></script>
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
            width: 65%;
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
      #vote:hover,#dislike:hover,#comment:hover{
        color:burlywood;
      }
      #vote{
        padding:10px 15px;

      }
      #dislike{
        padding:10px 15px;

      }
      #comment{
        padding: 10px 20px;

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
          <h1 style="color:#fff" class="mb-3">QA Forum!</h1>
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

    
    ?>

  </head>
  <body>
    <!-- Start your project here-->
    <?php   // LOOP TILL END OF DATA  

while($rows=$result->fetch_assoc()) 

{ 

?> 
<?php
$user = 'rooti'; 

$password = '';  
$database = 'csetest';  
$servername='localhost';
$fid= $rows['id'];
$mysqlc = new mysqli($servername, $user,  


                $password, $database); 

                if ($mysqlc->connect_error) { 

                    die('Connect Error (' .  
                
                    $mysqlc->connect_errno . ') '.  
                
                    $mysqlc->connect_error); 
                } 
                $sqlc = "SELECT * FROM comments WHERE  fid = $fid"; 

$resultc = $mysqlc->query($sqlc); 

$mysqlc->close(); 

?>
<row>
<div class="col-sm">
<div class="wholeCard">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $rows['question'];?></h5>
          
         
        
        </div>
</div>
<div class="row d-flex justify-content-center">
  <div class="col-md-14 col-lg-11">
    <div class="card shadow-0 border" style="background-color: #ffffff;">
      <div class="card-body p-4">
      <form action="add_comment.php?fid=<?php echo $rows['id']?> " method="post">
        <div class="form-outline mb-4">
          <input type="text" id="addANote"  name="comment" class="form-control" placeholder="Type comment..." />
          <label class="form-label" for="addANote">+ Add a comment</label>
        </div>
</form>
<?php   // LOOP TILL END OF DATA  

while($crows=$resultc->fetch_assoc()) 

{ 

?> 

        <div class="card mb-4">
          <div class="card-body">
          <?php echo $crows['comments'];?>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Martha</p>
              </div>
              <div class="d-flex flex-row align-items-center">
               
             
               
              </div>
            </div>
          </div>
        </div>

        <?php 
}
      ?> 

       

        
      </div>
    </div>
  </div>
</div>
      </div>

      <?php 
}
      ?> 
      </div>

      <div class="col-sm">
      <div class ='formclass'>
      <form style="float:center" action="insert.php" method="post">
        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" name="name" id="form4Example1" class="form-control" />
          <label class="form-label" for="form4Example1">Name</label>
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" name="email" id="form4Example2" class="form-control" />
          <label class="form-label" for="form4Example2">Email address</label>
        </div>
      
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" name="question" id="form4Example3" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Question</label>
        </div>
      
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4"  checked />
          <label class="form-check-label" for="form4Example4">
            Send me a copy of this message
          </label>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      </form>
      </div>
</div>
</div>
</row>

    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
   
    



  </body>
</html>
