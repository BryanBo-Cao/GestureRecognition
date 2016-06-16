<?OnlineGestureSurvey "include/databaseConnection.php";
	$connection = acquireConnection();
	$name = $_POST['name'];

	$sqlInsert = "INSERT INTO test_table (name)	VALUES ('{$name}')";
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