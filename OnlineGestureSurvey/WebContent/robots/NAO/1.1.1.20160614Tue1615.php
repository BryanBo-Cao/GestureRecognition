<!DOCTYPE html>
<html>
    <head>
        <title>Online Gesture Survey</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="//samdutton.com">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta id="theme-color" name="theme-color" content="#fff">
		<base target="_blank">
        <link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.css"/>
<!--         <script src="../../bootstrap/js/bootstrap.js"></script> -->
<!--         <script src="../../js/jquery-1.12.4.js"></script> -->
   		<script src="../../js/videoRecorder.js"></script>
   		
   		<style>
			a#downloadLink {
			  display: block;
			  margin: 0 0 1em 0;
			  min-height: 1.2em;
			}
			p#data {
			  min-height: 6em;
			}
		</style>
    </head>

    <body id="mybody" align="center">
        <div class="container-fluid" style="width: auto" id="content">
                    <!--first low for the header and image-->
                    
                    <!-- narbar div ====================================================================== start-->
                    <div name="narbarDiv" class="row-fluid">
                        <div class="span13">
                            <!--header-->
                            <div class="navbar navbar-inverse">
                                <div class="navbar-inner navbar-fixed-top" role="navigation">
                                	<ul class="nav navbar-right">
	                                    <li class="active">
	                                   		<a class="brand" href="#">Gesture Survey</a>
	                                    </li>
                                    </ul>
                                </div> <!--navbar-inner-->
                            </div><!--navbar navbar-inverse-->   
                        </div> <!--span13-->   
                    </div><!--row-fluid-->   
                    <!-- narbar div ====================================================================== end-->
                    <br/>				
					<!-- start ====== question div -->
					<div name="questionDiv" class="well" align="left">
						<p>
							<h4>Question #1.1.1</h4>
							Please answer the following questions from your perspective:
							<br/>
							What gestures would you like to use if you want Nao to move left from your perspective?
						</p>						
					</div>
					<!-- end ====== question div -->
					
					<!-- img div ====================================================================== start-->
                    <div name="imgDiv">
                        <img class="img-rounded" src="../../img/NAO.png" height="280" width="400"/>
                    </div><!--row-fluid-->   
                    <!-- img div ====================================================================== end-->
					<br/>	
                    
                    <!-- start ====== recorder div -->
                    <div name="recorderDiv">
						<div align="center">
							<video controls autoplay></video><br>
						</div>
						<div name="buttons">
							<button class="btn btn-primary" id="rec" onclick="onBtnRecordClicked()">Record</button>
						  	<button class="btn" id="pauseRes"   onclick="onPauseResumeClicked()" disabled>Pause</button>
						  	<button class="btn btn-danger" id="stop"  onclick="onBtnStopClicked()" disabled>Stop & Save</button>
							<button class="btn btn-success" id="next" >Next</button>
						</div>
						<br/>
							<div class="well">
							<a id="downloadLink" download="mediarecorder.webm" name="mediarecorder.webm" href></a>
							<p id="data"onload="statess()"></p>
						</div>
						
						
						<!-- test -->
						
						<div class="">
									<button class="btn btn-primary" id="rec" onclick="onBtnRecordClicked()">Record</button>
								  	<button class="btn" id="pauseRes"   onclick="onPauseResumeClicked()" disabled>Pause</button>
								  	<button class="btn btn-danger" id="stop"  onclick="onBtnStopClicked()" disabled>Stop</button>
								</div>
								
								<br/>
									<div class="well">
									<a id="downloadLink" download="mediarecorder.webm" name="mediarecorder.webm" href></a>
									<p id="data"></p>
								</div>
								</form>
							</div>
							<!-- End forDiv -->
						<!-- test -->
						
					</div>
					<!-- end ====== recorder div -->
                    
        </div> <!--container-fluid--> 
        <?php
            include '../../include/copyRightBottom.html';
        ?>
    </body>
</html>