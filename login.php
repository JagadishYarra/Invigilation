<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = new mysqli("localhost","root","","Invigilator");
    $_SESSION['gm']=$email;
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }else{
        $stmt = $con->prepare("select * from Login where email = ?"); 
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result= $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                include 'display.php';
                #echo"Login Successfully";
            }
            else{
                echo '<script>alert("Invalid Email or Password")
                             window.location.href = "login.html";</script>';
                #echo "<script>if(confirm('Your Record Sucessfully Inserted. Now Login')){document.location.href='index.php'};</script>";
                #echo "Invalid Email or Password";
            }
        }else {
                echo '<script>alert("Invalid Email or Password")
                window.location.href = "login.html";</script>';
            #echo "Invalid Email or Password";
        }
    }
?>