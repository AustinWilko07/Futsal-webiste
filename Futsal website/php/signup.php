<?php
//declaring variable 
$page_title = "signup":

//calling header and nav pages 
include 'includes/Header.php';
include 'includes/Nav.php';

//calling connection page
include_once('includes/connection.php')
?>

<!-- start of content -->
<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3">  </div>
        <div class="col-sm-6">
            <h2>Sign up</h2>
            <form class = "form-control-lg" action = "signup_inc_php" method = "POST"> 
               <div class = "form-group row pt-4"> 
                   <label for = "email" class = "col-sm-2 col-form-label">Email</label>
                   <div class = "col-sm-10"> 
                       <input type = "text" name = "email" class = "form-control" placeholder = "Email">
                   </div>
               </div>
               <div class = "form-group row pt-4"> 
                   <label for = "Password" class = "col-sm-2 col-form-label">Password</label>
                   <div class = "col-sm-10"> 
                       <input type = "Password" name = "Pwd" class = "form-control" placeholder = "Password">
                   </div>
               </div>
               <div class = "form-group row pt-5">
                  <div class = "col-sm-10">
                      <button type = "submit" name = "signup_btn">Sign up</button>
                  </div>
               </div>
            </form>
        </div>
        <div class="col-sm-3">

        </div>

    </div>
</div>
<!-- end of content -->