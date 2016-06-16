<?php
	include "include/databaseConnection.php";
	$connection = acquireConnection();
	$videoData = $_POST['videoData'];

	$sqlInsert = "INSERT INTO Video (video_data) VALUES ('{$videoData}')";
	$result = mysql_query($sqlInsert,$connection);
	
	if ($result) {
		// Success!
		echo "YES!";
		header ("location: done.php");
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
	echo "<script>window.location = 'index.php'</script>";
?>