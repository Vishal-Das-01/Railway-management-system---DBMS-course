<?php
include_once 'dbConnection.php';

if (isset($_POST['submit'])) {

$ticket_id = $_POST['ticket_id'];

 // Replace with the actual ticket ID

$query = "CALL Cancel($ticket_id)";
$result = mysqli_query($conn, $query);
mysqli_close($conn);	

}

?>