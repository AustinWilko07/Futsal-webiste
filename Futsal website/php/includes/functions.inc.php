<?php
//--------------Signup Functions--------------

//function for checking empty text fields
//Receive 3 parameters
function emptyInputSignup($email, $pwd, $perepatpwd)
{ 


    //Declare boolean variable
    $result = false;

//check if feilds are empty using built in function
if (empty($email)  empty($pwd)  empty($repeatpwd)){
    //Sets to true, sends error message
    $result = true;

    //if the fields are filled, set the variable to false
} else {
    $result = false;
}
    //accesps and submits the data to the database
    return $result;
}

//function for checking invalid email
//Receive 1 parameters
function Invalidemail($email)
{

    //Declare boolean variable
    $result = false;

//check if feilds are empty using built in function
if (filter_var($email, filter)) {
    //Sets to true, if email is invalid send error message
    $result = true;

    //if the fields are filled, set the variable to false
} else {
    $result = false;
}
    //accesps and submits the data to the database
    return $result;


//function for checking password matchs agaisnt repeat password
//Receive 1 parameters
function pwdMatch($Pwd, $repeatpwd)
{

    //Declare boolean variable
    $result = false;

//check if feilds are empty using built in function
if ($Pwd !== $repeatpwd) {
    //Sets to true, if email is invalid send error message
    $result = true;

    //if the fields are filled, set the variable to false
} else {
    $result = false;
}
    //accesps and submits the data to the database
    return $result;
}

//function for checking loength of password
//Receive 1 parameters
function longpwd($Pwd, $repeatpwd)
{

    //Declare boolean variable
    $result = false;

    //set the maximum length of the password to 10 
    $max = 10;

    //stores the number of charecters in a variable
    $len = strlen($pwd);


//check if number of charecters is less than 10
if ($len > $max) {    //Sets to true, if email is invalid send error message
    $result = true;

    //if the fields are filled, set the variable to false
} else {
    $result = false;
}
    //accesps and submits the data to the database
    return $result;
}
}