<?php
include_once("navbar.php");
?>
<html>
<head>
	<title>Search for your tickets</title>
</head>
<link rel="stylesheet" href="formStyle.css">
<body>
<div class="mainHeading">
  <h2 style="position: absolute; top:5%; left: 42%">BOOK YOUR TICKET</h2>
  <p style="position: absolute; top:8%; left: 34%; color:white;">Before entering the details please look at avaliable trains.<br>If you see a blue screen after loading then go back & click ' VIEW TICKET ' for confirmation </p>
  </div>

<div class="login-box">
  <h2>Enter your details</h2>
  
  <form action="input01.php" method="POST">

    <div class="user-box">
	<input type="date" name="train_date"  placeholder="Date of train" required="">
	<label>Date</label>
    </div>
    
    <div class="user-box">
      <input type="number" name="no_of_seats"   required="">
      <label>Seats</label>
    </div>
    
    <div class="user-box">
      <input type="number" name="train_number"  required="">
      <label>Train Number</label>
    </div>
    
    <div class="user-box">
      <input type="text" name="category" required="">
      <label>Categroy ( AC or General )</label>
    </div>
    
    
    <div class="user-box">
      <input type="text" name="name" required="">
      <label>Your Name</label>
    </div>
    
    
    <div class="user-box">
      <input type="number" name="age" required="">
      <label>Your Age</label>
    </div>
    
    <div class="user-box">
      <input type="text" name="sex" required="">
      <label>Sex ( M or F )</label>
    </div>
    
    
    <div class="user-box">
      <input type="text" name="address" required="">
      <label>Address</label>
    </div>

    <button type="submit" name="submit">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Book</button>
    
    <!-- <a href="#" name>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a> -->
  </form>
</div>






<!-- <form action="input01.php" method="POST">
	<input type="date" name="train_date"  placeholder="Date of train">
	<br>
	<input type="number" name="no_of_seats"  placeholder="How many seats you want">
	<br>
	<input type="number" name="train_number" placeholder="Enter the train id in which you want seats">
	<br>
	<input type="text" name="category" placeholder="AC OR GENERAL">
	<br>
	
    	
	<button type="submit" name="submit">Search</button>

 
</form> -->

</body>
</html>