<?php

$conn = mysqli_connect("localhost", "rooti", "", "csetest");
if($conn === false){ 

    die("ERROR: Could not connect. " 

        . mysqli_connect_error()); 

} 

$comments=$_REQUEST['comment'];
$fid= $_GET["fid"];
$uid = $_COOKIE['id'];

$sql = "INSERT INTO comments  VALUES(0,'$comments',$uid,$fid)";
if(mysqli_query($conn, $sql)){ 

    header("location: forum.php");
}
else{ 

    echo "ERROR: Hush! Sorry $sql. " 

        . mysqli_error($conn); 

} 

  

// Close connection 

mysqli_close($conn); 


?>