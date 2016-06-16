/*
 * written by github.com/BryanBo-Cao
 * 20160614Tue0501
 */

$(document).ready(function(){
	
	$('button[name=re-record]').slideUp(0);
	$('#pauseRes').slideUp(0);
	$('#stop').slideUp(0);
	$('#next').slideUp(0);
	$('#downloadDivId').slideUp(0);
	$('#videoDiv').slideUp(0);
	
	$('#rec').click(function(){
		$(this).slideUp(650);
		$('#stop').slideDown(650);
		$('#downloadDivId').slideDown(650);
		$('#videoDiv').slideDown(650);
	});
	
	$('#stop').click(function(){
		$(this).slideUp(650);
		$('button[name=re-record]').slideDown(650);
		$('#next').slideDown(650);
	});
	
	$('button[name=re-record]').click(function(){
		$(this).slideUp(650);
		$('#next').slideUp(650);
		$('#stop').slideDown(650);
	});
	
});
