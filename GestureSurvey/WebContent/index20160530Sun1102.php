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
                    
                    <!-- narbar div ====================================================================== start-->
                    <div name="narbarDiv" class="row-fluid">
                        <div class="span13 ">
                            <!--header-->
                            <div class="navbar navbar-inverse">
                                <div class="navbar-inner navbar-fixed-top" role="navigation">
                                	<ul class="nav navbar-right">
	                                    <li class="active">
	                                   		<a class="brand" href="">Gesture Survey</a>
	                                    </li>
                                    </ul>
                                </div> <!--navbar-inner-->
                            </div><!--navbar navbar-inverse-->   
                        </div> <!--span13-->   
                    </div><!--row-fluid-->   
                    <!-- narbar div ====================================================================== end-->
                    
                    <br/>
                    <!-- img div ====================================================================== start-->
                    <div name="imgDiv">
                        <img class="img-rounded" src="img/NAO.png" height="400" width="400"/>
                    </div><!--row-fluid-->   
                    <!-- img div ====================================================================== end-->
						
						<form id="loginForm" action="insertIntoDatabase.php" method="post" class="form-horizontal" role="form">
							<br />
								name: <input type="text" name="name" id="name" placeholder="enter your username here"/>
                            <br />
							<font color='red'><p id="displayUsernameError"></p></font>
								<br />
								<input class="span4 btn btn-primary" name="submit" type="submit" id="login" value="Submit" />
							</font>
						</form> 
                    </div><!--row-fluid-->   
                    <!-- form div ====================================================================== end-->
        </div> <!--container-fluid--> 
        <?php
            include 'include/copyRightBottom.html';
        ?>
    </body>
</html>