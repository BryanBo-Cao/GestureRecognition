
<!DOCTYPE html>
<html>
    <?php include "../../include/headForVideoRecorder.html"; ?>
<body>
<center>
<br/>
	<!-- start - main div -->
	<div class="container-fluid" style="width: auto" id="content">
		<!--first low for the header and image-->
		<?php include "../../include/navbar.html"; ?>
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
			<div name="imgDiv" class="well">
				<img id="imgId" class="img-rounded" src="../../img/NAO.png" height="320" width="420"/>
			</div><!--row-fluid-->   
			<!-- img div ====================================================================== end-->
            
            <!-- start ====== recorderDiv -->
			<div name="recorderDiv">
				<div align="center" class="well">
				
					<p>Record a 320x240 video</p>
					<div id="videoDiv">
						<video controls autoplay></video>
					</div>
					
					<div id="buttonsDiv" name="buttons">
						<button class="btn btn-danger" name="record" id="rec" onclick="onBtnRecordClicked()">Record</button>
						<button class="btn btn-danger" name="re-record" 　id="rec" onclick="onBtnRecordClicked()">Re-record</button>
						<button class="btn" id="pauseRes" onclick="onPauseResumeClicked()" disabled>Pause</button>
						<button class="btn btn-primary" id="stop" onclick="onBtnStopClicked()" disabled>Finish</button>
						<button class="btn btn-success" id="next" onclick="onBtnNextClicked()" disabled>Next</button>
					</div>
					
					<div id="downloadDivId">
						<br/>
						<a id="downloadLink" download="mediarecorder.webm"
							name="mediarecorder.webm" href></a>
						<p id="data" onload="statess()"></p>
					</div>
					
				</div>
				<br />
			</div>
			<!-- end ====== recorderDiv -->
			
	</div> <!--container-fluid-->
	<!-- end - main div -->
	<?php include "../../include/jsForVideoRecorder.html";	?>
</center>
</body>
</html>