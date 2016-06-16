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
                    
                    <!-- img div ====================================================================== start-->
                    <div name="imgDiv">
                        <img class="img-rounded" src="img/NAO.png"/>
                    </div><!--row-fluid-->   
                    <!-- img div ====================================================================== end-->
                    
                    <!-- form div ====================================================================== start-->
<!--                     <div name="formDiv"> -->
<!-- 						<div id="wrapperDiv"> -->
							<!-- indexDiv ====================================================================== start-->
<!-- 							<div id="indexDiv"> -->
<!-- 									<label>URL:</label> -->
<!-- 									<input class="span7" type="text" name="URLInIndexPagesForm" id="URLInIndexPagesForm" placeholder="enter URL here"/> -->
<!-- 									<p id="displayURLError"></p> -->
<!-- 									<br/> -->
<!-- 									<label>Database Host Address:</label> -->
<!-- 									<input class="span7" type="text" name="dbAddress" id="dbAddress" placeholder="enter database host address here"/> -->
<!-- 									<p id="displayDbAddressError"></p> -->
<!-- 									<br> -->
<!-- 									<label>Database Name:</label> -->
<!-- 									<input class="span4" type="text" name="dbName" id="dbName" placeholder="enter database name here"/> -->
<!-- 									<p id="displayDbNameError"></p> -->
<!-- 									<br> -->
<!-- 									<label>User Name:</label> -->
<!-- 									<input class="span4" type="text" name="userName" id="userName" placeholder="enter username here"/> -->
<!-- 									<p id="displayUserNameError"></p> -->
<!-- 									<br> -->
<!-- 									<label>Password:</label> -->
<!-- 									<input class="span4" type="text" name="password" id="password" placeholder="enter password here"/> -->
<!-- 									<br> -->
<!-- 									<input class="btn btn-primary" name="submit" type="submit" id="submit" value="Index Web Page" /> -->
<!-- 									<input class="btn" type="reset" value="Clear" /> -->
<!-- 									<br><br> -->
<!-- 									<label>Keyword:</label> -->
<!-- 									<input class="span4" type="text" name="keyword" id="keyword" placeholder="enter keyword here"/> -->
<!-- 									<br> -->
<!-- 									<p id="displayKeywordError"></p> -->
<!-- 									<button class="btn search-query" name="button" id="button">QueryKeyword</button> -->
<!-- 									<br><br> -->
<!-- 								</form> -->
<!-- 							</div> -->
					
<!-- 							<div id="retrieve"> -->
<!-- 									<label>User Screen Name:</label> -->
<!-- 									<input class="span3 search-query" type="text" name="userScreenNameTweets" id="userScreenNameTweets" placeholder="enter user screen name here"/> -->
<!-- 									<br><br> -->
<!-- 									<label>Keyword:</label> -->
<!-- 									<input class="span3 search-query" type="text" name="keywordTweets" id="keywordTweets" placeholder="enter keyword here"/> -->
<!-- 									<br><br> -->
<!-- 									<label>User Name:</label> -->
<!-- 									<input class="span3 search-query" type="text" name="userNameTweets" id="userNameTweets" placeholder="enter user name here"/> -->
<!-- 									<br><br> -->
<!-- 									<label>Location:</label> -->
<!-- 									<input class="span3 search-query" type="text" name="locationTweets" id="locationTweets" placeholder="enter location here"/> -->
<!-- 									<br> -->
<!-- 									<p id="displayQueryError"></p> -->
<!-- 									<br><label>Query Tweets</label> -->
<!-- 									<input class="btn search-query" name="submit" type="submit" value="QueryTweets"/>  -->
<!-- 									<input class="btn" type="reset" value="Clear" /><br> -->
<!-- 								</form> -->
<!-- 							</div> -->
<!-- 						</div> -->
											
						
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