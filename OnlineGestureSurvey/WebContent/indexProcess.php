<?php
	include "include/databaseConnection.php";
	$connection = acquireConnection();
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	
	//insert user info into database
	$sqlInsert = "INSERT INTO User (firstName, lastName, email)	VALUES ('{$firstName}', '{$lastName}', '{$email}')";
	$insertResult = mysql_query($sqlInsert,$connection);
	
	if ($insertResult) {
		// Insertion Success!
		header ("location: robots/NAO/1.1.1.php");
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
?>