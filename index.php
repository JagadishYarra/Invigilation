<!DOCTYPE html>
<?php
include "connection.php"
?>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    <script>
function myFunction() {
  alert("I am an alert box!");
}
</script>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }
    h2 {
      color: #333;
      margin-bottom: 30px;
    }
    .form-group label {
      color: #666;
      font-weight: bold;
    }
    .form-control {
      border-radius: 0;
      border-color: #ccc;
      box-shadow: none;
      padding: 10px;
      font-size: 16px;
      color: #333;
    }
    .form-control:focus {
      border-color: #333;
      box-shadow: none;
    }
    .checkbox label {
      color: #666;
      font-weight: normal;
    }
    .btn-default {
      background-color: #333;
      color: #fff;
      border-radius: 0;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
    }
    .btn-default:hover {
      background-color: #444;
    }
    .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:10px;
  margin:0 auto;
 }
  </style>
</head>
<div class="w3-sidebar w3-teal w3-bar-block" style="width:20%">
<a href="display1.php"class="w3-bar-item" style="font-size:24px;font-weight:bold;font-family:Helvetica,Arial,sans-serif;text-decoration: none;color:white"><i class="fas fa-home"></i> The Invigilator</a>
  <a href="schedule.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Schedule</a>
  <a href="index.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Edit</a>
  <a href="3.html" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Avaliability</a>
  <a href="changepassword.php" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Change Password</a>
  <a href="login.html" class="w3-bar-item w3-button" style="text-decoration: none;font-size: 15px;font-family: Verdana, sans-serif;">Logout</a>
</div>
<body >

<div class="container box" >
  


 
  <form action="" name="form1" method="post" >
  <div class="form-group">
  <div class="form-group">
      <label for="email" >Email:</label>
      <input type="email" class="form-control" id="email" 
      value="
      <?php
        session_start();
        $email=$_SESSION['mail'];   
        echo $email;
      ?>"
      name="email" disabled>
    </div>
      <label for="pwd">Name</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Dob</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="dob">
    </div>
    <div class="form-group">
      <label for="pwd">Mobile Number</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
    </div>
    <button type="submit" name="update" class="btn btn-success">Save</button>
  </form>
</div>
</div>
<div class ="col-lg-4">
</div>
</div>

</body>
<?php
 $email = $_SESSION['mail'];
 $con = new mysqli("localhost","root","","Invigilator");
 if($con->connect_error){
     die("Failed to connect : ".$con->connect_error);
 }else{
     $check_id="SELECT * FROM Login WHERE email = '$email'";
     $res=mysqli_query($con, $check_id);
     if(mysqli_num_rows($res) > 0){
         $fetch = mysqli_fetch_assoc($res);
         $fetch_id = $fetch['id'];
     }
    }
    if(isset($_POST["update"])){
      $name = $_POST["name"];
      $dob = $_POST["dob"];
      $mobileNumber = $_POST["mobile"];
      
      $query = "UPDATE personal_details SET name='$name', dob='$dob', phone='$mobileNumber' WHERE id='$fetch_id'";
      mysqli_query($con, $query) or die(mysqli_error($con));
  }
?>


</html>