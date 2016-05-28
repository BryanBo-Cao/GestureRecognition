/*
 * written by Bo
 */

//validate the input of loginForm
$(document).ready(function(){

    $('#loginForm').submit(function(){
        
        var usernameInLoginForm = $('#usernameInLoginForm').val();
        var passwordInLoginForm = $('#passwordInLoginForm').val();
        
        // check if the username and password field is not empty
        if(usernameInLoginForm === null || usernameInLoginForm === ""){
            //alert("empty");
            $('#displayUsernameError').html("<br/>The field of username must be filled out. (Click me to slide up ^_^)");
            $('#displayUsernameError').slideDown(500);
            return false;//stay in 'index.php' instead of directing to other pages
        }else // check if the username and password field is not empty
        if(passwordInLoginForm === null || passwordInLoginForm === ""){
            $('#displayPasswordError').html("<br/>The field of password must be filled out. (Click me to slide up ^_^)");
            $('#displayPasswordError').slideDown(500);
            return false;//stay in 'index.php' instead of directing to other pages
        }else{// data entered correctly
            //return false;//stay in 'index.php' instead of directing to other pages
        }
    });
    
    // click to slide up
    $("p#displayUsernameError").click(function(){
        $(this).slideUp(500);
    });
    $("p#displayPasswordError").click(function(){
        $(this).slideUp(500);
    });
    $("p#displayLoginError").click(function(){
        $(this).slideUp(500);
    });
});
