<!DOCTYPE html>
<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: index.php");
  exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter email.";
  } else {
    $email = trim($_POST["email"]);
  }

  // Check if password is empty
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter your password.";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate credentials
  if (empty($email_err) && empty($password_err)) {
    // Prepare a select statement
    $sql = "SELECT id, email, password FROM registration WHERE email = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_email);

      // Set parameters
      $param_email = $email;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if username exists, if yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {
          // Bind result variables
          mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
          if (mysqli_stmt_fetch($stmt)) {
            $login_err = "fetch done $hashed_password";
            if (password_verify($password, $hashed_password)) {
              //echo "password correct";
              // Password is correct, so start a new session
              session_start();

              // Store data in session variables
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["email"] = $email;

              
                
              $sqli = "SELECT * FROM registration WHERE email = '$email'"; 
              if(mysqli_query($link, $sqli)){ 

                $result = $link->query($sqli); 
              $rows=$result->fetch_assoc();
              // echo $rows;
              setcookie('id',$rows['id'],time()+60*60*7, "/");           
              setcookie('username',$rows["firstname"],time()+60*60*7, "/");  
              // Redirect user to welcome page
              header("location: index.php");
            }
            else{ 
            
                echo "ERROR: Hush! Sorry $sqli. " 
            
                    . mysqli_error($link); 
            
            } 
            
            
            } else {
              echo "password not correct $hashed_password";
              // Password is not valid, display a generic error message
              $login_err = "Password is not varified $password";
            }
          }else{
            $login_err = "no fetch";
          }
        } else {
          // Username doesn't exist, display a generic error message
          $login_err = "User doesn't exist";
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Close connection
  mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Program Review</title>
  <!--boostrap cdn link-->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
</head>

<body>
  <section class="weapper">
    <?php
    if (!empty($login_err)) {
      echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>


    <div class="container">
      <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="rounded bg-white shadow p-5">

          <?php
          if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
          }
          ?>

          <h3 class="text-dark fw-bolder fs-4 mb-2">Sign In</h3>
          <div class="fw-normal text-muted mb-4">
            new here?<a href="#" class="text-primary fw-bold text-decoration-none">create an accont</a>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
            <label for="floatingInput">Email</label>
            <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?> <?php echo $email; ?>
            <?php echo $email_err; ?>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            <label for="floatingPassword">Password</label>
            <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>
            <?php echo $password_err; ?>
          </div>

          <div class="mt-2 text-end">
            <a href="#" class="text-primary fw-bold text-decoration-none">Forget password?</a>
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
          </div>

          <div class="text-center text-muted text-uppercase mb-3" or></div>

          <a href="#" class="btn btn-light login_with w-100 my-4">
            <img src="images/google-icon.svg" class="img-fluid me-3">continue with google
          </a>


        </form>
      </div>
    </div>

  </section>

</body>

</html>