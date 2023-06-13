<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Forgot Password</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<style>
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 input.parsley-success,
 select.parsley-success,
 textarea.parsley-success {
   color: #468847;
   background-color: #DFF0D8;
   border: 1px solid #D6E9C6;
 }

 input.parsley-error,
 select.parsley-error,
 textarea.parsley-error {
   color: #B94A48;
   background-color: #F2DEDE;
   border: 1px solid #EED3D7;
 }

 .parsley-errors-list {
   margin: 2px 0 3px;
   padding: 0;
   list-style-type: none;
   font-size: 0.9em;
   line-height: 0.9em;
   opacity: 0;

   transition: all .3s ease-in;
   -o-transition: all .3s ease-in;
   -moz-transition: all .3s ease-in;
   -webkit-transition: all .3s ease-in;
 }

 .parsley-errors-list.filled {
   opacity: 1;
 }
 
 .parsley-type, .parsley-required, .parsley-equalto{
  color:#ff0000;
 }
.error
{
  color: red;
  font-weight: 700;
} 
</style>

<body>
<div class="w3-sidebar w3-teal w3-bar-block" style="width:20%">
<a href="display1.php"class="w3-bar-item" style="font-size:24px;font-weight:bold;font-family:Helvetica,Arial,sans-serif;text-decoration: none;color:white"><i class="fas fa-home"></i> The Invigilator</a>
  <a href="schedule.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Schedule</a>
  <a href="index.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Edit</a>
  <a href="3.html" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Avaliability</a>
  <a href="changepassword.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Change Password</a>
  <a href="login.html" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Logout</a>
</div>
<div class="container">  
    <div class="table-responsive">  
    <h3 align="center">Change Password</h3><br/>
    <div class="box">
     <!--<form>  
       <div class="form-group">
       <label for="email">Email Address</label>
       <input type="text" name="email" id="email" placeholder="Enter Email" required 
       data-parsley-type="email" data-parsley-trigg
       er="keyup" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" id="login" name="pwdrst" value="Send Password Reset Link" class="btn btn-success" />
       </div>
       <p class="error"><?php #if(!empty($msg)){ echo $msg; } ?></p>
     </form>-->
     <form action="forgot_password.php" method="POST" autocomplete="">
                    <!--<h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>-->
                    <label for="email">Email Address</label>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter Email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                      <input class="btn btn-success" type="submit" name="check-email" value="Send Change Password Link">
                    </div>
                </form>
     </div>
   </div>  
  </div>
</body>
<!--
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                      /*
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                      */
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>-->
</html>