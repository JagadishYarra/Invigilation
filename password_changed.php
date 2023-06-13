<?php require_once "controllerUserData1.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login.html');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!--<link rel="stylesheet" href="style.css">-->
</head>
<style>
     .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}

.button:hover {
  background-color: #3e8e41;
}
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
</style>
<body>
<div class="w3-sidebar w3-teal w3-bar-block" style="width:20%">
<a href="display1.php"class="w3-bar-item" style="font-size:24px;font-weight:bold;font-family:Helvetica,Arial,sans-serif;text-decoration: none;color:white"><i class="fas fa-home"></i> The Invigilator</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Schedule</a>
  <a href="index.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Edit</a>
  <a href="#" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Avaliability</a>
  <a href="changepassword.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Change Password</a>
  <a href="login.html" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Logout</a>
</div>
    <br/>
    <br/>
    <div class="container" style="padding-left: 150px;">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form box">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
            <!--
                <form action="password-changed.php" method="POST">
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>-->
            </div>
        </div>
    </div>
    
</body>
</html>