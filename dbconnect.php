<?php
	$conn = mysqli_connect("localhost", "root", "", "jewelry");

	if (!$conn) {
		die("Connection Failed".mysqli_connect_error());
	}
?>