<?php
include_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket details</title>
</head>
<link rel="stylesheet" href="showTicketStyle.css">
<body>
    <p></p>
    <h2 style="color: white; text-align: center; position: absolute; top:10%; left: 40%">Your Ticket details are:</h2>

    <?php
include_once 'dbConnection.php';

// Select all data from the table
$sql = "SELECT * FROM passenger ORDER BY ticket_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);


$seats = "SELECT seats FROM reservation WHERE ticket_id IN (SELECT ticket_id FROM passenger ORDER BY ticket_id DESC LIMIT 1);";

$number = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    echo "<table style='position: absolute; top: 15%; left: 10%;'>";
    // Output the data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th>Ticket ID</th><td>" . $row['ticket_id'] . "</td>";
        echo "</tr><tr>";
        echo "<th>Train Number</th><td>" . $row['train_number'] . "</td>";
        echo "</tr><tr>";
        echo "<th>Date</th><td>" . $row['date'] . "</td>";
        echo "</tr><tr>";
        // echo "<th>Number of seats</th><td>" .  . "</td>";
        // echo "</tr><tr>";
        echo "<th>Name</th><td>" . $row['name'] . "</td>";
        echo "</tr><tr>";
        echo "<th>Age</th><td>" . $row['age'] . "</td>";
        echo "</tr><tr>";
        echo "<th>Sex</th><td>" . $row['sex'] . "</td>";
        echo "</tr><tr>";
        echo "<th>Address</th><td>" . $row['address'] . "</td>";
        echo "</tr><tr>";
        echo "<th>Status</th><td>" . $row['status'] . "</td>";
        echo "</tr><tr>";
        echo "<th>Category</th><td>" . $row['category'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
