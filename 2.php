<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'invigilator';
session_start();
$email=$_SESSION['gm'];
// Create a new database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
else{
    $check_id="SELECT * FROM Login WHERE email = '$email'";
    $res=mysqli_query($conn, $check_id);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_id = $fetch['id'];
    }
   }
// Check if the form was submitted

/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO timetable (id,day, slot1, slot2, slot3, slot4, slot5, slot6, slot7, slot8, slot9) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind the form inputs to the SQL statement parameters
    $stmt->bind_param("isiiiiiiiii",$fetch_id,$day, $slot1, $slot2, $slot3, $slot4, $slot5, $slot6, $slot7, $slot8, $slot9);

    // Iterate over the weekdays and save the data
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
foreach ($weekdays as $weekday) {
    // Get the slot values for the current weekday
    $day=$weekday;
    $slot1 = isset($_POST[$weekday]['slot1']) ? 1 : 0;
    $slot2 = isset($_POST[$weekday]['slot2']) ? 1 : 0;
    $slot3 = isset($_POST[$weekday]['slot3']) ? 1 : 0;
    $slot4 = isset($_POST[$weekday]['slot4']) ? 1 : 0;
    $slot5 = isset($_POST[$weekday]['slot5']) ? 1 : 0;
    $slot6 = isset($_POST[$weekday]['slot6']) ? 1 : 0;
    $slot7 = isset($_POST[$weekday]['slot7']) ? 1 : 0;
    $slot8 = isset($_POST[$weekday]['slot8']) ? 1 : 0;
    $slot9 = isset($_POST[$weekday]['slot9']) ? 1 : 0;    

    // Save the data to the database
    $day = $weekday;
    $stmt->execute();
}
}*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE timetable SET slot1=?, slot2=?, slot3=?, slot4=?, slot5=?, slot6=?, slot7=?, slot8=?, slot9=? WHERE id=? AND day=?");

    // Iterate over the weekdays and update the data
    $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
    foreach ($weekdays as $weekday) {
        // Get the slot values for the current weekday
        $slot1 = isset($_POST[$weekday]['slot1']) ? 1 : 0;
        $slot2 = isset($_POST[$weekday]['slot2']) ? 1 : 0;
        $slot3 = isset($_POST[$weekday]['slot3']) ? 1 : 0;
        $slot4 = isset($_POST[$weekday]['slot4']) ? 1 : 0;
        $slot5 = isset($_POST[$weekday]['slot5']) ? 1 : 0;
        $slot6 = isset($_POST[$weekday]['slot6']) ? 1 : 0;
        $slot7 = isset($_POST[$weekday]['slot7']) ? 1 : 0;
        $slot8 = isset($_POST[$weekday]['slot8']) ? 1 : 0;
        $slot9 = isset($_POST[$weekday]['slot9']) ? 1 : 0;

        // Set the values of $id and $day based on your logic
        $id = $fetch_id; // Specify the value of the 'id' field
        $day = $weekday;
        // Bind the form inputs to the SQL statement parameters
        $stmt->bind_param("iiiiiiiiiis", $slot1, $slot2, $slot3, $slot4, $slot5, $slot6, $slot7, $slot8, $slot9, $id, $day);

        // Execute the update statement
        $stmt->execute();

        /*if ($conn->query($sql) === TRUE and $conn->query($sql1) === TRUE) {
            echo '<script>alert("New user created successfully")
            window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Fail to create new user")
            window.location.href = "index.php";</script>';
        }*/
    }
}
    // Close the prepared statement
    $stmt->close();
    // Close the database connection
    echo '<script>alert("Update successful")
    window.location.href = "3.html";</script>';
    $conn->close();

    // Redirect to a success page

?>