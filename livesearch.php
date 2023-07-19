<?php

//echo "Hehyllo";

include("config.php");

if(isset($_POST['input'])){

    $input = $_POST['input'];

    $query = "SELECT * FROM reviews Where name LIKE '{$input}%'  OR department LIKE '{$input}%' ";

    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result) > 0){?>

        <table class="table table-border table-striped mt-4" name="autosearch">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    
                </tr>
            </thead>

            <tbody>
                <?php

                    while($row = mysqli_fetch_assoc($result)){

                        $id = $row['id'];
                        $name = $row['name'];
                        $department = $row['department'];

                        ?>
                            <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $department;?></td>

                            </tr>
                        <?php

                    }

                ?>
            </tbody>

        </table>

<?php



    }else{

            echo "<h6 class='text-danger text-center mt-3'>No Data Found</h6>";

    }
    }

?>