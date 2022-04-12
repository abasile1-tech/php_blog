<?php
	// Create Connection
	$conn = mysqli_connect('localhost','root','','phpblog');

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
	}
	echo 'Connected successfully to MySQL phpblog';