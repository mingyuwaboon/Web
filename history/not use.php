<?php

    $mysqli = new $mysqli ('localhost:8888', 'root', 'root', 'his');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }   
    $query = "select * from history";
    $result = mysqli_query($mysqli,$query);
?>


<tr>

    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <td><?php echo $row['Bstation']; ?></td>
    <td><?php echo $row['Dstation']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['Timestamp']; ?></td>
    <td><?php echo $row['Time']; ?></td>
                    
</tr>
    <?php
        }
        ?>