<?php
	$videoData = "hahahahaha";
	echo $videoData."\n";
	$fname = "hah.txt";//generates random name
	chdir("/home/ironlab/Desktop/");
	
	$filePath = getcwd()."/".$fname;
	echo $filePath;
	chmod($filePath, 777);
	$file = fopen($path , 'w') or die(" fopen failed ");//creates new file

	echo fread($file, 3);
	
	fwrite($file, $videoData);
	fclose($file);
// 	if(!empty($_POST['videoData'])){
// 		$videoData = $_POST['videoData'];
// 		$fname = mktime() . ".webm";//generates random name
// 		$file = fopen("upload/" .$fname, 'w');//creates new file
// 		fwrite($file, $videoData);
// 		fclose($file);
// 	}
?>