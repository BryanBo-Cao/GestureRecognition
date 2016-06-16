
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"media="screen"/>
        <link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap-responsive.css"/>
        <link type="text/css" rel="sytlesheet" href="../../bootstrap/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../../bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css"/>
        <link type="text/css" rel="stylesheet" href="../../bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css"/>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../bootstrap/js/jquery-1.9.1.js"></script>
        <script src="../../bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"></script>
        <script src="../../bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="../../js/icheck.js"></script>
        <script type="text/javascript" src="../../js/icheck.min.js"></script>
        <script type="text/javascript" src="../../js/logout.js"></script>
        <script type="text/javascript" src="../../js/studentApply.js"></script>

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
    
    <?php
        session_start();
        $username=$_SESSION['username'];
        $connection = mysql_connect("localhost", "bryan55","bryan55201402171747");
        $db = "bryan55";
        mysql_select_db($db, $connection) or die("fail");//'fail' means cannot connect the database
        $sql = "SELECT * FROM student WHERE registration_no='{$username}'";
        $result = mysql_query($sql,$connection) or die("fail1");//'fail1' means student does not exist
        
        $row = mysql_fetch_array($result);
        $name = $row['name'];
        $department = $row['department'];
        $no_days_entitled = $row['no_days_entitled'];
        $no_days_taken = $row['no_days_taken'];
        $no_days_remaining = $row['no_days_remaining'];
    ?>

    <body onload="statess()" id="mybody">
        <div class="container-fluid" style="width: auto" id="content">
                    <!--first low for the header and image-->
                    <div class="row-fluid">
                        <div class="span13">
                            <!--header-->
                            <div class="navbar navbar-inverse">
                                <div class="navbar-inner navbar-fixed-top" role="navigation">
                                    <a class="brand" href="../studentHomepage.php">Holiday System</a>
                                    <ul class="nav">
                                        <li class="active"><a href="../studentHomepage.php"><i class="icon-home"></i>Home</a></li>
<!--                                        <li><a href="#">About</a></li>-->
                                    </ul>
                                    
                                    
                                    <ul class="nav navbar-text pull-right">
                                        
                                        <li> <button type="button" id="logOutButtonInStudentApply" class="btn btn-danger">Log Out</button></li>
                                    </ul>
                                    <p class="navbar-text pull-right">
                                        Logged In As <?php  echo  $_SESSION["username"]."&nbsp;"; ?> </a>
                                    </p>
                                 
                                    <!--navbar-inner-->
                                </div>
                                <img src="../../pics/SheffieldCity.jpg" /> 
                                <!--navbar navbar-inverse-->   
                            </div>
                            <!--span13-->   
                        </div>
                        <!--row-fluid-->   
                    </div>
                  
            <div id="applicationForm">
                    <div id="holidayPolicy" class="well">
                        <h4>HOLIDAY POLICY</h4>
                        <p>
                            Full-time PGR students are entitled to take up to 30 days as holiday in each academic year, excluding bank hoildays and closure days. The academic year commences on 1st October, and students will be 
                            notified of the dates of the closure days each year. It is recommended that students take no more than 4 weeks holiday at any one time.
                            Students are expected to provide their supervisors and the PGR programme Administrators with reasonable advance 
                            notice of the dates when they plan to take holiday, which is subject to their supervisors' approval.
                            Students commencing registration at times other than the beginning of the academic year are entitled to holidays on a pro roto basis until the commencement of the next academic year.
                            <br/><br/>
                            Students should agree on periods of holiday tiime with their supervisor before returning the coompleted notification of holiday form to: Jodie Burnham/Carol Fidler, LU116, L Floor, medicine-pgr@sheffield.ac.uk
                        </p>
                    </div><!--end of holidayPolicy-->
                    
                        <div id="holidayDates">
                            <form id="applyForm" action="studentApplyProcess.php" method="post"><h4>
                            <!--<form id="applyForm" action="" method="post"><h4>-->
                                <table class="table table-striped">
                                    <tr>
                                        <td>Name </td>
                                        <td><?php echo $name;?></td>
                                    </tr>
                                    <tr>
                                        <td>Department </td>
                                        <td><?php echo $department;?></td>
                                    </tr>
                                    <tr>
                                        <div id="startDate">
                                            <td>
                                                From
                                            </td>
                                            <td>
                                                <div class="input-append date form_date" data-date="2013-02-21T15:25:00Z">
                                                    <input id="startDate" name="startDate" size="16" type="text" value="" readonly>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                                </div>
                                            </td>
                                        </div><!-- end of startDate-->
                                    </tr>
                                    
                                    <tr>
                                        <div id="returnDate">
                                            <td>
                                                Return
                                            </td>
                                            <td>
                                                <div class="input-append date form_date" data-date="2013-02-21T15:25:00Z">
                                                    <input id="returnDate" name="returnDate" size="16" type="text" value="" readonly>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                                </div>

                                                <script type="text/javascript">
                                                    
                                                </script>
                                            </td>
                                        </div><!-- end of returnDate-->
                                    </tr>
                                    <tr>
                                        <td>Number of Days Entitled to </td>
                                        <td><?php echo $no_days_entitled;?></td>
                                    </tr>
                                    <tr>
                                        <td>Number of Days Taken So Far </td>
                                        <td><?php echo $no_days_taken;?></td>
                                    </tr>
                                    <tr>
                                         <td>Number of Days Remaining </td>
                                         <td><?php echo $no_days_remaining;?></td>
                                    </tr>
                                    <tr>
                                        <td><input id="submit" type="submit" class="span2 btn btn-primary" value="Accept & Apply"/>
                                        <input type="reset" class="btn" value="Reset"/></td>
                                    </tr>
                                    <input type="hidden" name="no_days_entitled" value="<?php echo $no_days_entitled;?>"/>
                                    <input type="hidden" name="no_days_taken" value="<?php echo $no_days_taken;?>"/>
                                    <input type="hidden" name="no_days_remaining" value="<?php echo $no_days_remaining;?>"/>
                                
                                </table>
                            </h4></form><!--end of applyForm-->
                        </div><!--end of holidayDates-->
            </div><!-- end of application form-->
                        
                    
                    <!--container-fluid-->        
        </div>
        <?php
            include '../../include/copyRightBottom.html';
        ?>
    </body>
</html>