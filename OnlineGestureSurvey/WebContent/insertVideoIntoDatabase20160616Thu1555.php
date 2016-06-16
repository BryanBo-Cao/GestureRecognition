<?OnlineGestureSurvey "include/databaseConnection.php";
	$connection = acquireConnection();
	$video_data = $_GET['video_data'];

	$sqlInsert = "INSERT INTO video_table (video_data) VALUES ('{$video_data}')";
	$result = mysql_query($sqlInsert,$connection);
	
	if ($result) {
		// Success!
		echo "YES!";
		$sqlQuery = "SELECT video_data FROM video_table;";
		$result = mysql_query($sqlQuery, $connection);
		
		while ($result->fetchInto($row)) {
			echo "<form id=\"$row[0]\" name=\"$row[0]\" method=post action=\"\"><td style=\"border-bottom:1px solid black\">$row[0]</td><td style=\"border-bottom:1px solid black\"><input type=hidden name=\"remove\" value=\"$row[0]\"><input type=submit value=Remove></td><tr></form>\n";
		}
		echo $result;
// 		header ("location: show_video.php");
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
// 	echo "<script>window.location = 'index.php'</script>";
	
?>