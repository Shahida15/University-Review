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
<!DOCTYPE html> 

<html lang="en"> 

  
<head> 

    <meta charset="UTF-8"> 

    <title>GFG User Details</title> 

    <!-- CSS FOR STYLING THE PAGE --> 

    <style> 

        table { 

            margin: 0 auto; 

            font-size: large; 

            border: 1px solid black; 

        } 

  

        h1 { 

            text-align: center; 

            color: #006600; 

            font-size: xx-large; 

            font-family: 'Gill Sans', 'Gill Sans MT',  

            ' Calibri', 'Trebuchet MS', 'sans-serif'; 

        } 

  

        td { 

            background-color: #E4F5D4; 

            border: 1px solid black; 

        } 

  

        th, 

        td { 

            font-weight: bold; 

            border: 1px solid black; 

            padding: 10px; 

            text-align: center; 

        } 

  

        td { 

            font-weight: lighter; 

        } 

    </style> 
</head> 

  
<body> 

    <section> 

        <h1>University Review</h1> 

        <!-- TABLE CONSTRUCTION--> 

        <table> 

            <tr> 

                

                <th>name</th> 

                <th>email</th> 

                <th>question</th> 

            </tr> 

            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 

            <?php   // LOOP TILL END OF DATA  

                while($rows=$result->fetch_assoc()) 

                { 

             ?> 

            <tr> 

                <!--FETCHING DATA FROM EACH  

                    ROW OF EVERY COLUMN--> 

                
                <td><?php echo $rows['name'];?></td> 

                <td><?php echo $rows['email'];?></td> 

                <td><?php echo $rows['question'];?></td> 

            </tr> 

            <?php 

                } 

             ?> 

        </table> 

    </section> 
</body> 

  
</html> 
 
                
                  


