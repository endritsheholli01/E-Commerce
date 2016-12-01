<?php

	include 'dbconnect.php';

	$username =$_POST['username'];
	$password =$_POST['password'];

	//prevent MYSQL injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	// Query the database for user
	$sql = "SELECT * FROM users WHERE Username = '$username' and Password = '$password'";
	$result = $conn->query($sql);
	if (!$row=mysqli_fetch_assoc($result)) {
		echo 'Failed to login!';
	 } 
	else {
		echo 'login success! Welcome'.$row['Username'];
	}

?>