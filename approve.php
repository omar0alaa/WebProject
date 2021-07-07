<?php
	session_start();
	require ("config.php");
	$a = 'Approved';
	$b = 'Denied';
	$cmd=$_POST["cmd"];
	$bid =$_POST['bid'];
	if($cmd == "Approve"){
		$sql = "UPDATE booking SET status ='$a' WHERE booking_id = '$bid'";
		mysqli_query($conn, $sql);
	}
	if($cmd == "Deny"){
		$sql = "UPDATE booking SET status ='$b' WHERE booking_id = '$bid'";
		mysqli_query($conn, $sql);
	}
?>