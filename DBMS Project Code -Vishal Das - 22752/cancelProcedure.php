<?php
include_once 'dbConnection.php';


$sql1 = "CREATE PROCEDURE Cancel(IN p_ticket_id INT)
BEGIN
    DECLARE v_status VARCHAR(255);
    DECLARE v_category VARCHAR(255);
    DECLARE v_train_number INT;
    DECLARE v_date DATE;
    DECLARE v_seats INT;

    SELECT status, category, train_number, date INTO v_status, v_category, v_train_number, v_date
    FROM passenger WHERE ticket_id = p_ticket_id;

    SELECT seats INTO v_seats FROM reservation WHERE ticket_id = p_ticket_id;

    IF v_status IS NOT NULL THEN
        DELETE FROM passenger WHERE ticket_id = p_ticket_id;

        IF v_status = 'confirm' THEN
            UPDATE passenger
            SET status = 'confirm'
            WHERE status = 'waiting' AND train_number = v_train_number AND date = v_date AND category = v_category
            LIMIT 1;
        END IF;

        IF v_category = 'AC' THEN
            UPDATE train_status
            SET booked_ac_seats = booked_ac_seats - v_seats
            WHERE train_number = v_train_number AND train_date = v_date;
        ELSE
            UPDATE train_status
            SET booked_general_seats = booked_general_seats - v_seats
            WHERE train_number = v_train_number AND train_date = v_date;
        END IF;
    ELSE
        SELECT 'Ticket not found';
    END IF;
END;";

if (mysqli_query($conn, $sql1)) {
    echo "Stored procedure created successfully";
} else {
    echo "Error creating stored procedure: " . mysqli_error($conn);
}




mysqli_close($conn);




?>
