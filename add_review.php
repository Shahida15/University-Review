<?php

$conn = mysqli_connect("localhost", "rooti", "", "csetest");
if($conn === false){ 

    die("ERROR: Could not connect. " 

        . mysqli_connect_error()); 

} 
$name = $_REQUEST['name'];
$department = $_REQUEST['department']; 
$review=$_REQUEST['review'];
$dates = date("Y/m/d");

$sql = "INSERT INTO reviews  VALUES(0,'$name','$department','$dates','$review')";
if(mysqli_query($conn, $sql)){ 

    // echo "<h3>data stored in a database successfully." 

    //     . " Please browse your localhost php my admin" 

    //     . " to view the updated data</h3>";

    //     echo nl2br("\n$name\n $email\n "

    //     . "$question"); 
    header("location: index.php");
}
else{ 

    echo "ERROR: Hush! Sorry $sql. " 

        . mysqli_error($conn); 

} 

  

// Close connection 

mysqli_close($conn); 


?>