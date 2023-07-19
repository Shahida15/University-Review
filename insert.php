<?php

$conn = mysqli_connect("localhost", "rooti", "", "csetest");
if($conn === false){ 

    die("ERROR: Could not connect. " 

        . mysqli_connect_error()); 

} 
$name = $_REQUEST['name'];
$email = $_REQUEST['email']; 
$question=$_REQUEST['question'];

$sql = "INSERT INTO forum  VALUES(0,'$name','$email','$question')";
if(mysqli_query($conn, $sql)){ 

    echo "<h3>data stored in a database successfully." 

        . " Please browse your localhost php my admin" 

        . " to view the updated data</h3>";

        echo nl2br("\n$name\n $email\n "

        . "$question"); 
}
else{ 

    echo "ERROR: Hush! Sorry $sql. " 

        . mysqli_error($conn); 

} 

  

// Close connection 

mysqli_close($conn); 


?>