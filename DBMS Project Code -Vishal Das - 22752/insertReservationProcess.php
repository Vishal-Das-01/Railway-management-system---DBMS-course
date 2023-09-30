<?php

include_once 'dbConnection.php';

$sql1 = "CREATE PROCEDURE insertReservationProcess(IN p_train_number INT, IN p_booking_date DATE, IN p_name varchar(255), IN p_age int, IN p_sex char, IN p_address varchar(255), IN p_status varchar(255), IN p_category VARCHAR(255), IN p_seats INT)

BEGIN

INSERT INTO `passenger` (`ticket_id`, `train_number`, `date`, `name`, `age`, `sex`, `address`, `status`, `category`) VALUES (p_train_number, p_booking_date, p_name, p_age, p_sex, p_address, p_status, p_category);
END";


if (mysqli_query($conn, $sql1)) {
    echo "Stored procedure created successfully";
} else {
    echo "Error creating stored procedure: " . mysqli_error($conn);
}


// Close connection
mysqli_close($conn);
?>