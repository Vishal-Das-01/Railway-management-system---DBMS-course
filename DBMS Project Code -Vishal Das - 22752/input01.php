<?php 
include_once 'dbConnection.php';
include_once 'navbar.php';

if (isset($_POST['submit'])) {
$date = $_POST['train_date'];
$seats = $_POST['no_of_seats'];
$trainNumber = $_POST['train_number'];
$category= $_POST['category'];
$name= $_POST['name'];
$age= $_POST['age'];
$sex= $_POST['sex'];
$address= $_POST['address'];

$sql = "CALL bookingProcedure($trainNumber, '$date', '$category', $seats, '$name', $age, '$sex', '$address')";

// Make sure you have a bookingProcedure stored procedure in your database
mysqli_query($conn, $sql);


mysqli_close($conn);	

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking in progress</title>
</head>
<link rel="stylesheet" href="styleLoading.css">
<!-- <link rel="stylesheet" href="styleLoading.css"> -->
<body>
    
    <div class="progress-bar"></div>
    <h1 class="count"></h1>
    <script src="loading.js"></script>

<!-- 
<div id="progressbar">
  <span id="loading"></span>
  <div id="load">Please wait ....</div>

</div> -->



</body>
</html>


