<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$gender = "";
$dob = "";
$email = "";
$numbeer = "";
$studentid = "";
$password = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'rooti', '', 'csetest');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $numbeer = mysqli_real_escape_string($db, $_POST['numbeer']);
    $studentid = mysqli_real_escape_string($db, $_POST['studentid']);

    $password = mysqli_real_escape_string($db, $_POST['password']);
    $param_password = password_hash($password, PASSWORD_DEFAULT);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) {
        array_push($errors, "Firstname is required");
    }
    if (empty($lastname)) {
        array_push($errors, "Lastname is required");
    }
    if (empty($gender)) {
        array_push($errors, "Gender is required");
    }
    if (empty($dob)) {
        array_push($errors, "Dob is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($numbeer)) {
        array_push($errors, "Numbeer is required");
    }
    if (empty($studentid)) {
        array_push($errors, "Studentid is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    //   if ($password_1 != $password_2) {
    // 	array_push($errors, "The two passwords do not match");
    //   }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    // $user_check_query = "SELECT * FROM registration WHERE firstname='$firstname' OR email='$email' LIMIT 1";
    // $result = mysqli_query($db, $user_check_query);
    // $user = mysqli_fetch_assoc($result);

    // if ($user) { // if user exists
    //     if ($user['firstname'] === $firstname) {
    //         array_push($errors, "Username already exists");
    //     }

    //     if ($user['email'] === $email) {
    //         array_push($errors, "email already exists");
    //     }
    // }

    // Finally, register user if there are no errors in the form

    // $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO registration (firstname, lastname, gender, dob, email, numbeer, studentid, password ) 
  			  VALUES('$firstname', '$lastname', '$gender', '$dob', '$email', '$numbeer', '$studentid', '$param_password ')";
    mysqli_query($db, $query);
    $_SESSION['firstname'] = $firstname;
    $_SESSION['success'] = "You are now logged in";
    echo "logger in $password";
    header('location: index.php');
}

?> 