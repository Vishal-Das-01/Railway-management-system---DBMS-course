<?php
include_once("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Following trains are avalaible</title>
    <link rel="stylesheet" href="tableStyle.css">
</head>
<body>

    <!-- <p> this is inside displayTrain.html</p> -->

    <h2 style="color: white; text-align: center; position: absolute; top:14%; left: 30%">Following is the schedule of avaliable of trains:</h2>
    <p>
    <?php

    include_once 'dbConnection.php';

    // Select all data from the table
    $sql = "SELECT * FROM trainlist;";
    $result = mysqli_query($conn, $sql);
    

    // Check if there are any results
    echo "<table border='1' style= 'position: absolute; top:22%; left: 10%'>
    <tr>
    <th>Train Number</th>
    <th>Train Name</th>
    <th>From</th>
    <th>To</th>
    <th>Fair for a AC seat</th>
    <th>Fair for a GENERAL seat</th>
    <th>Avaliable on:</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['train_number'] . "</td>";
      echo "<td>" . $row['train_name'] . "</td>";
      echo "<td>" . $row['source'] . "</td>";
      echo "<td>" . $row['destination'] . "</td>";
      echo "<td>" . $row['ac_ticket_fair'] . "</td>";
      echo "<td>" . $row['general_ticket_fair'] . "</td>";
      echo "<td>" . $row['weekdays'] . "</td>";
      echo "</tr>";
    }
    
    echo "</table>";
    
    mysqli_close($conn);
    
    ?>



    </p>


</body>
</html>