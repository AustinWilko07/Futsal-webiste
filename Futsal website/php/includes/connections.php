<?php
//calling the connection page
require('connections.php');

//calling the functions_inc page
require('functions_inc.php');


//check if then user got here legitametly
//when the signup button is clicked
//the data is stored in variables and text fields are
//santitized

if ($_SERVER('REQUEST_METHOD') == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST('email'));
    $pwd = mysqli_real_escape_string($conn, $_POST('pwd'));
    $repeat_pwd = mysqli_real_escape_string($conn, $_POST('repeat_pwd'));


    //checks if text fields are empty
    if (emptyInputSignup($email, $pwd, $repeat_pwd))  {
        //redirect to the signup page
        header("location:
        ../signup.php?error=empty_fields&email=".$email)

    }

}