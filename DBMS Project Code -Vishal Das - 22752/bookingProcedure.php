<?php
include_once 'dbConnection.php';

$sql1 = "CREATE PROCEDURE bookingProcedure(IN p_train_number INT, IN p_booking_date DATE, IN p_category VARCHAR(255), IN p_seats INT, IN p_name varchar(255), IN p_age INT, IN p_sex CHAR, IN p_address varchar(255))
BEGIN

    DECLARE v_total_ac_seats INTEGER;
    DECLARE v_booked_ac_seats INTEGER;
    DECLARE v_total_general_seats INTEGER;
    DECLARE v_booked_general_seats INTEGER;
    DECLARE v_status VARCHAR(255);


    SELECT total_ac_seats, booked_ac_seats, total_general_seats, booked_general_seats INTO v_total_ac_seats, v_booked_ac_seats, v_total_general_seats, v_booked_general_seats
    FROM train_status WHERE train_number = p_train_number AND train_date = p_booking_date;

    IF (p_category = 'AC') THEN
        IF (v_booked_ac_seats + p_seats <= v_total_ac_seats) THEN
            UPDATE train_status
            SET booked_ac_seats = v_booked_ac_seats + p_seats
            WHERE train_number = p_train_number AND train_date = p_booking_date;
            SET v_status = 'confirm';
            INSERT INTO `passenger` (`train_number`, `date`, `name`, `age`, `sex`, `address`, `status`, `category`) VALUES (p_train_number, p_booking_date, p_name, p_age, p_sex, p_address, v_status, p_category);
            INSERT INTO `reservation`(`seats`) VALUES (p_seats);
            

        ELSEIF (v_booked_ac_seats + p_seats <= v_total_ac_seats + 2) THEN
            UPDATE train_status
            SET booked_ac_seats = v_booked_ac_seats + p_seats
            WHERE train_number = p_train_number AND train_date = p_booking_date;
            SET v_status = 'waiting';
            INSERT INTO `passenger` (`train_number`, `date`, `name`, `age`, `sex`, `address`, `status`, `category`) VALUES (p_train_number, p_booking_date, p_name, p_age, p_sex, p_address, v_status, p_category);
            INSERT INTO `reservation`(`seats`) VALUES (p_seats);

        ELSE
            SELECT 'Sorry, there are not enough AC seats available';
        END IF;

    ELSEIF (p_category = 'GENERAL') THEN
        IF v_booked_general_seats + p_seats <= v_total_general_seats THEN
            UPDATE Train_Status
            SET booked_general_seats = v_booked_general_seats + p_seats
            WHERE train_number = p_train_number AND train_date = p_booking_date;
            SET v_status = 'confirm';
            INSERT INTO `passenger` (`train_number`, `date`, `name`, `age`, `sex`, `address`, `status`, `category`) VALUES (p_train_number, p_booking_date, p_name, p_age, p_sex, p_address, v_status, p_category);
            INSERT INTO `reservation`(`seats`) VALUES (p_seats);


        ELSEIF (v_booked_general_seats + p_seats <= v_total_general_seats + 2) THEN
            UPDATE train_status
            SET booked_general_seats = v_booked_general_seats + p_seats
            WHERE train_number = p_train_number AND train_date = p_booking_date;
            SET v_status = 'waiting';
            INSERT INTO `passenger` (`train_number`, `date`, `name`, `age`, `sex`, `address`, `status`, `category`) VALUES (p_train_number, p_booking_date, p_name, p_age, p_sex, p_address, v_status, p_category);
            INSERT INTO `reservation`(`seats`) VALUES (p_seats);

       ELSE
            SELECT 'Sorry, there are not enough general seats available';
        END IF;
    ELSE
        SELECT 'Invalid seat category';
    END IF;
    
END;";

if (mysqli_query($conn, $sql1)) {
    echo "Stored procedure created successfully";
} else {
    echo "Error creating stored procedure: " . mysqli_error($conn);
}

// echo "the status of booking is ". $v_status;

// Close connection
mysqli_close($conn);

?>