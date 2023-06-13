<?php require_once "controllerUserData1.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!--<link rel="stylesheet" href="style1.css">-->
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
    <div class="container">
        <div class="row table-responsive">
        <br/>
            <h2 align="center">New Password</h2><br/>
            <div class="col-md-4 offset-md-4 form box">
                <form action="new_password.php" method="POST" autocomplete="off">
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="Password must contain at least 8 characters including at least one uppercase letter, one lowercase letter, and one number">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>