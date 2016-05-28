<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"media="screen"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css"/>
        <link type="text/css" rel="sytlesheet" href="../bootstrap/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css"/>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery-1.9.1.js"></script>
        <script src="../bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"></script>
        <script src="../bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="../js/validateForm.js"></script>
        <script type="text/javascript" src="../js/logout.js"></script>
        <script type="text/javascript" src="../js/studentHomepage.js"></script>
        <!--
            In this code the document can not get the element by ID or by Name,
            because the "progress bar"code have not loaded yet, it loads the all code of  document
            from top to bottom.but if you put this code in the <body> and after the "progress bar"code,
            it will work,because at that time the element of progressBar has been loaded into the document.
            on the other hand you can also still retain this code in this area, and then encapsulate this code into
            a function,after the document has been loaded,you can invoke this function in the document,
            such as<input type="text" onclick="XXX()" />,so it also can work well.
            <script>
                document.getElementById("progressBar").style.width = "40%";       
            </script>
        -->
    </head>

    <body onload="statess()" id="mybody">
        <div class="container-fluid" style="width: auto" id="content">
                    <!--first low for the header and image-->
                    <div class="row-fluid">
                        <div class="span13">
                            <!--header-->
                            <div class="navbar navbar-inverse">
                                <div class="navbar-inner navbar-fixed-top" role="navigation">
                                    <a class="brand" href="">Holiday System</a>
                                    <ul class="nav">
                                        <li class="active"><a href=""><i class="icon-home"></i>Home</a></li>
<!--                                        <li><a href="#">About</a></li>-->
                                    </ul>
                                    
                                    
                                    <ul class="nav navbar-text pull-right">
                                        
                                        <li> <button type="button" id="logOutButtonInStudentHomepage" class="btn btn-danger">Log Out</button></li>
                                    </ul>
                                    <p class="navbar-text pull-right">
                                        Logged In As <?php  echo  $_SESSION["username"]."&nbsp;"; ?> </a>
                                    </p>
                                 
                                    <!--navbar-inner-->
                                </div>
                                <img src="../pics/SheffieldCity.jpg" /> 
                                <!--navbar navbar-inverse-->   
                            </div>
                            <!--span13-->   
                        </div>
                        <!--row-fluid-->   
                    </div>
                    <!--for navigation menue and iframe--> 
                    <div class="row-fluid">
                        <div class="span2 bs-docs-sidebar">
                            <div class="well well-large bs-docs-sidenav">
                                <ul class="nav nav-list">
                                    
                                    <li class="nav-header">Student profile</li>
                                    <li ><a id="studentInfoInNavBar">Student Info</a></li>
                                    <br/>
                                    <li class="nav-header">Application</li>
                                    <li ><a href="application/studentApply.php" id="applyInNavBar">Apply</a></li>
                                    <li ><a id="applicationInfoInNavBar">Application Info</a></li>
                                    <li ><a id="unprocessedInNavBar">Unprocessed</a></li>
                                    <li ><a id="processedInNavBar">Processed</a></li>
                                    <br/>

                                    <li class="nav-header">Setting</li>
                                    <li ><a id="passwordInNavBar">Amend Password</a></li>
                                    <li ><a id="emailInNavBar">Amend Email</a></li> 
                                </ul>
                                <!--well well-large-->
                            </div>
                            <!--span2-->
                        </div>

                        <div class="span10" id="myFrame">
<!--                        <!--span10-->
                        </div>
                        <!--row-fluid-->    
                    </div>
                    <!--container-fluid-->        
        </div>
        <?php
            include '../include/copyRightBottom.html';
        ?>
    </body>
</html>