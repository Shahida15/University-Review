<?php include('reg.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="form.css" />
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
  <style>
  
        #locator-input-section {
            width: 100%;
            margin: 10px;
            max-width: 600px;

        }
  </style>

</head>

<body>
  <!-- <?php
        if (isset($_POST['submit'])) {
          $password = trim($_POST["password"]);
          if (isset($_POST['firstname']) && isset($_POST['lastname'])   && isset($_POST['dob']) &&  isset($_POST['email']) &&  isset($_POST['numbeer']) &&  isset($_POST['studentid']) &&  isset($_POST['password'])) {
            $query = "insert into registration(firstname,lastname,dob,email,numbeer,studentid,password) values('{$_POST['firstname']}' ,'{$_POST['lastname']}' , '{$_POST['dob']}','{$_POST['email']}','{$_POST['numbeer']}','{$_POST['studentid']}', ,'{$password}') ";
            $result = mysqli_query($connect, $query);
            print($result);
            echo $result;
            header("location: index.php");
          }
          if (isset($result)) {
            echo "<h3 style='text-align:center'>You are registered successfully.</h3>";
          } else {
            print($result);
            echo "<h3 style='text-align:center'>Error</h3>";
          }
        }

        ?> -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="Sample photo" class="img-fluid" style="
                    border-top-left-radius: 0.25rem;
                    border-bottom-left-radius: 0.25rem;
                  " />
            </div>
            <div class="col-xl-6">
              <form action="reg.php" method="post">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">User registration form</h3>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="firstname" id="form3Example1m" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="lastname" id="form3Example1n" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n">Last name</label>
                      </div>
                    </div>
                  </div>

                  <section class="container">
        <div class="ui icon big input" id="locator-input-section">
            <input type="text" placeholder="Enter Your Address" id="autocomplete" />
            <i aria-hidden="true" class="dot circle outline link icon" id="locator-button"></i>
        </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0n11PMxpG92oHUfj5HXA3lNa3lFVexBU&libraries=places">
</script>
<script src="app.js"></script>
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                    <h6 class="mb-0 me-4">Gender:</h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" name="gender" id="femaleGender" value="female" />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" name="gender" id="maleGender" value="male" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline mb-0">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" name="gender" id="otherGender" value="other" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <select class="select">
                        <option value="1">State</option>
                        <option value="2">Dhaka</option>
                        <option value="3">Option 2</option>
                        <option value="4">Option 3</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-4">
                      <select class="select">
                        <option value="1">City</option>
                        <option value="2">Dhaka</option>
                        <option value="3">borishal</option>
                        <option value="4">cumilla</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="dob" id="form3Example9" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example9">DOB</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="email" id="form3Example90" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example90">Email id</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="numbeer" id="form3Example99" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example99">phone no</label>
                  </div>
                  

                  <div class="form-outline mb-4">
                    <input type="text" name="studentid" id="form3Example97" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example97">Student ID</label>
                  </div>


                  <div class="form-outline mb-4">
                    <input type="text" name="password" id="form3Example97" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example97">password</label>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" class="btn btn-light btn-lg">
                      Reset all
                    </button>
                    <button type="submit" name="reg_user" class="btn btn-warning btn-lg ms-2">
                      Submit form
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>