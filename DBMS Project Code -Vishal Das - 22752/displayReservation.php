<?php

include_once 'dbConnection.php'
?>
<html>
<head>
	<title>FOLLOWING ARE reservation</title>
</head>
<body>
<?php 
// Select all data from the table
$sql = "SELECT * FROM reservation;";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Train Date: " . $row["train_date"]. " , Seats:- " . $row["seats"]. " train_number: " . $row["train_number"]. ", Category " . $row["category"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);

?>
</body>
</html>
