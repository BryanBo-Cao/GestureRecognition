/*
 * written by Bo
 */

//validate the input of loginForm
$(document).ready(function(){
    $('#startForm').submit(function(){

    	var firstNameInLoginForm = $('#firstNameInLoginForm').val();
    	var lastNameInLoginForm = $('#lastNameInLoginForm').val();
        var emailInLoginForm = $('#emailInLoginForm').val();
        
        // check if the first name field is empty
        if(firstNameInLoginForm === null || firstNameInLoginForm === ""){
            $('#displayFirstNameError').html("<br/>The field of first name must be filled out. (Click me to slide up.)");
            $('#displayFirstNameError').slideDown(500);
            return false;//stay in 'index.php' instead of directing to other pages
        }else // check if the last name field is empty
        if(lastNameInLoginForm === null || lastNameInLoginForm === ""){
            $('#displayLastNameError').html("<br/>The field of last name must be filled out. (Click me to slide up.)");
            $('#displayLastNameError').slideDown(500);
            return false;//stay in 'index.php' instead of directing to other pages
        }else // check if the email field is empty
        if(emailInLoginForm === null || emailInLoginForm === ""){
            $('#displayEmailError').html("<br/>The field of email must be filled out. (Click me to slide up.)");
            $('#displayEmailError').slideDown(500);
            return false;//stay in 'index.php' instead of directing to other pages
        }else{// check if email's format is correct
        	var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
        	if(!regex.test(emailInLoginForm)){
        		$('#displayEmailError').html("<br/>Please enter a valid email. (Click me to slide up.)");
        		$('#displayEmailError').slideDown(500);
        		return false;
        	}
        }
    });
    
    // click to slide up
    $("p#displayFirstNameError").click(function(){
        $(this).slideUp(500);
    });
    $("p#displayLastNameError").click(function(){
        $(this).slideUp(500);
    });
    $("p#displayEmailError").click(function(){
        $(this).slideUp(500);
    });
});
