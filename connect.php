<?php
// $firstName = $_POST[ 'firstName'];
// $lastName = $_POST[ 'lastName'];
// $gender = $_POST[ 'gender'];
// $dob = $POST[ 'dob'];
// $email = $POST[ 'email'];
// $number = $_POST[ 'number'];

//Database connection
$connect = mysqli_connect("localhost","rooti","","csetest");
// $conn = new mysqli('localhost', 'root','','csetest');
if($connect->connect_error){
    die('Connection Failed : '.$connect->connect_error);
}

// }else{
//     $stmt =$conn->prepare("insert into registration(firstName, lastName, gender, dob, email, number)
//     values(?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("sssssi",$firstName, $lastName, $gender, $dob, $email, $number);
//     $stmt->execute();
//     echo "registration Successfully...";
//     $stmt->close();
//     $conn->close();
// }
