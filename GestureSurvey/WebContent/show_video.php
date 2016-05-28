<!DOCTYPE html>
<html>
    <head>
        <title>Gesture Survey</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"media="screen"/>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css"/>
        <link type="text/css" rel="sytlesheet" href="bootstrap/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css"/>
        <link type="text/css" rel="stylesheet" href="bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css"/>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery-1.9.1.js"></script>
        <script src="bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"></script>
        <script src="bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="js/validateForm.js"></script>
    </head>

    <body onload="statess()" id="mybody" align="center">
        <div class="container-fluid" style="width: auto" id="content">
                    <!--first low for the header and image-->
					<?php 
						include "include/databaseConnection.php";
						$connection = acquireConnection();
					?>											
						
                    </div><!--row-fluid-->   
                    <!-- form div ====================================================================== end-->
        </div> <!--container-fluid--> 
        <?php
            include 'include/copyRightBottom.html';
        ?>
    </body>
</html>