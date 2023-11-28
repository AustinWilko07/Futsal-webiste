<?php
//calling the compettition page
require("connections.php");

//calling the functions-inc page
require("functions_inc.php");

//Check if then user got here legitamtely
if($_SERVER{"REQUEST_METHOD"} = "POST"){
    $email = mysqli_real_escape_string{$conn. $_POST("email")}
    $pwd = mysqli_real_escape_string{$conn. $_POST("pwd")}
    $pwdrepeat = mysqli_real_escape_string{$conn. $_POST("pwdrepeat")}
    
    //check if text fields are not empty
    if(emptyInputSignup($email, $pwd, $pwdrepeat)) {
          //redirect to the signup page
          header("location: ../signup.php?error=empty_fields&email");
          //kills it
          exit();
      }
    

    //validate email, receives a parameter
    if (invalidEmail($email)  !== false) {
        //redirect to the signup page
        header("location: ../signup.php?error=invalidemail");
        //kills it
        exit();
    }
    
//Validate Password match'
//Receive 2 paramenters
if{pwdMatch($pwd, $repeatpwd) !== false} {
 //redirect to the signup page
 header("location: ../signup.php?error=password_does_not_match");
 //kills it
 exit();
}

//Check if password lebgth is too long
//receive new parameter
if(longpwd($longpwd, $pwd) !== false){
//redirect to the signup page
header("location: ../signup.php?error=password_is_too_long");
//kills it
exit();
}

//Check if password lebgth is too short
//receive new parameter
if(longpwd($shortpwd, $pwd/) !== false){
    //redirect to the signup page
    header("location: ../signup.php?error=password_is_too_short");
    //kills it
    exit();
    }
    
//check if username/email already exists
if(emailExists($conn, $email)) {
 //redirect to the signup page
 header("location: ../signup.php?error=Email_is_already_in_use");
 //kills it
 exit();
 }




//Create a new user/admin if input is correct
//receives 3 parameters
CreateUser($conn, $email, $pwd);
}else{
    //redirect to the signup page
    header("location: ../signup.php");
    //kills it
    exit();
}


