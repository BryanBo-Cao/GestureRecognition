<!DOCTYPE html>
<html>
	<?php include "include/mainHead.html"; ?>
    <body onload="statess()" id="mybody" align="center">
        <div class="container-fluid" style="width: auto" id="content">
			<?php include "include/navbar.html"; ?>
                    <br/>
			<?php 
				include "include/databaseConnection.php"; 
				$connection = acquireConnection();
// 				$id_video = 5;
				$sqlQuery = "SELECT * FROM Video WHERE id_video = '2' ";
				$queryResult = mysql_query($sqlQuery, $connection);
				echo $queryResult;
				if (!$queryResult) {
					$message  = 'Invalid query: ' . mysql_error() . "\n";
					$message .= 'Whole query: ' . $query;
					die($message);
				}
				
				// Use result
				// Attempting to print $result won't allow access to information in the resource
				// One of the mysql result functions must be used
				// See also mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.
				$videoData;
				while ($row = mysql_fetch_assoc($queryResult)) {
					$videoData = $row['video_data'];
					echo $row['id_user'];
				}
				
				$videoData
				
			?>
			

        </div> <!--container-fluid--> 
        <?php
        	session_start();
            include 'include/copyRightBottom.html';
        ?>
    </body>
</html>