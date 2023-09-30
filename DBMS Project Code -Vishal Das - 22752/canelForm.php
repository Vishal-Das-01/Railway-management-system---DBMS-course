<?php
include_once("navbar.php");
?>

<html>
<head>
    <title>Cacnel Ticket</title>
  </head>
  <link rel="stylesheet" href="canelFormStyle.css">
  <style>
      *{
            background: #243b55;

      }
  </style>
<body>
    
    <div class="subscribe-box"> 
      <h2>Enter the ticket ID</h2>
      <h4>NOTE:- If you see white screen, then it means ticket has been cancelled.</h4>

      <form action="callCancel.php" method="POST" class="subscribe" >
        <input type="number" name="ticket_id" placeholder="ticket ID of your ticket" autocomplete="off" required="required"/>
        <button type="submit" name="submit"> <span>Cancel</span></button>

      </div>
      </form>

</body>
</html>


