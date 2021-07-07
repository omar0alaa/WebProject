<?php
// Start up your PHP Session
session_start();
// If the user is not logged in send him/her to the login form * need editing*
if ($_SESSION["Login"] != "YES") 
header("Location: login.php");

echo $_SESSION['Login'];
echo $_SESSION['LEVEL'];
 
if ($_SESSION["LEVEL"] == 1) { 
			
	     $booking_id = $_POST["bookingID"]
		 $lecturer_name = $_POST["lecturerName"]
		 $roomnumber = $_POST["roomNo"]
		 $status = $_POST["status"]
		 $time_start = $_POST["time-start"]
		 $time_end = $_POST["time-end"]
		 $purpose = $_POST["purpose"]
		 $comment = NULL

	     require ("config.php"); //read up on php includes https://www.w3schools.com/php/php_includes.asp

	     $sql = "INSERT INTO booking(booking_id, lecturer_name, roomnumber,status,time_start,time_end,comment,purpose) VALUES ('$booking_id, $lecturer_name, $roomnumber, $status, $time_start, $time_end, $comment,$purpose')" ;

	  	 if (mysqli_query($conn, $sql)) {
			echo "<h3>New booking inserted successfully</h3>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

	     mysqli_close($conn);
		 
	  
// If the user is not correct level
} else if ($_SESSION["LEVEL"] != 1) {
	
  echo "<p>Wrong User Level! You are not authorized to view this page</p>";
	 
 }
 
 
  
  