<!DOCTYPE html>
<html>
	<?php include "include/mainHead.html"; ?>
    <body onload="statess()" id="mybody" align="center">
        <div class="container-fluid" style="width: auto" id="content">
                    <?php include "include/navbar.html"; ?>
                    <br/>
                    <!-- img div ====================================================================== start-->
                    <div name="imgDiv">
                        <img class="img-rounded" src="img/NAO.png" height="280" width="400"/>
                    </div><!--row-fluid-->   
                    <!-- img div ====================================================================== end-->
					
					<br/>	
					<!-- start ====== instruction div-->
					<div name="instructionDiv" class="well" align="left">
						<p>
							<h4> Instruction: </h4>
							This website is used to conduct a survey of the gestures users will use to navigate a proximal robot.
							
							This survey will use the webcam on your laptop/desktop, please use a computer with webcams and the following browers 
							to do the survey. The browser can be Firefox 30 and up and Chrome 49.
							The information you share in this survey will be not published to a third thirty.
							After you read each question, click on "Record" button and record your gesture. When you finish
							doing your gesture for each question, which normally takes several seconds, click on "Stop & Save" button,
							and then click on "Next" to navigate to the next question.
							<br/>
						</p>
					</div>
					<!-- end ====== instruction div -->
					
					<!-- start ====== form div -->
					<div name="formDiv">	
						<form id="startForm" action="insertUserInfoIntoDatabase.php" method="post" class="form-horizontal" role="form">
							<br />
								First Name: <input type="text" name="firstName" id="firstNameInLoginForm" placeholder="enter your first name here"/>
                            <br />
							<font color='red'><p id="displayFirstNameError"></p>
							</font>
							
								Last Name: <input type="text" name="lastName" id="lastNameInLoginForm" placeholder="enter your last name here"/>
                            <br />
							<font color='red'><p id="displayLastNameError"></p>
							</font>
							
								Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="email" id="emailInLoginForm" placeholder="enter your email here"/>
                            <br />
							<font color='red'><p id="displayEmailError"></p></font>
							<br />
							</font>
							
							<input class="span4 btn btn-primary" name="submit" type="submit" id="login" value="Start" />
						</form> 
                    </div><!-- end ====== form div-->
        </div> <!--container-fluid--> 
        <?php
        	session_start();
            include 'include/copyRightBottom.html';
        ?>
    </body>
</html>