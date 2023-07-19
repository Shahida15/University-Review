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
        .h1{
            text-align: center;
        }
        .formclass{
            margin-top:4%;
            margin-left: 6%;
            margin-right:6%;
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
            <li class="nav-item">
              <a class="nav-link" href="registration.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled"
                >Disabled</a
              >
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    
  </head>
  <body>
    <!-- Start your project here-->
    <h1 style="text-align:center">Checkout</h1>
    <div class ="formclass">
            <form>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" class="form-control" />
              <label class="form-label" for="form6Example1">First name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example2" class="form-control" />
              <label class="form-label" for="form6Example2">Last name</label>
            </div>
          </div>
        </div>
      
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example3" class="form-control" />
          <label class="form-label" for="form6Example3">Company name</label>
        </div>
      
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example4" class="form-control" />
          <label class="form-label" for="form6Example4">Address</label>
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form6Example5" class="form-control" />
          <label class="form-label" for="form6Example5">Email</label>
        </div>
      
        <!-- Number input -->
        <div class="form-outline mb-4">
          <input type="number" id="form6Example6" class="form-control" />
          <label class="form-label" for="form6Example6">Phone</label>
        </div>
      
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form6Example7" rows="4"></textarea>
          <label class="form-label" for="form6Example7">Additional information</label>
        </div>
      
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
          <label class="form-check-label" for="form6Example8"> Create an account? </label>
        </div>
      
        <!-- Submit button -->
        <button type="Submit" class="btn btn-primary btn-block mb-4"a href="checkoutconnect.php?price">Place order</button>
      </form>
    </div>
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
