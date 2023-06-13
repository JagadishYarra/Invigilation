<?php
// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "invigilator";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve users
$sql = "SELECT * FROM examtt";
$result = $conn->query($sql);

// Fetch users data
$users = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Close the database connection
$conn->close();

// Build the HTML table
$table = "<table class='custom-table'>"; // Modified class name to "custom-table"
$table .= "<tr><th>Date</th><th>Day</th><th>Session</th><th>SubjectCode</th><th>SubjectName</th><th>Department</th><th>Sem</th></tr>";
foreach ($users as $user) {
    $table .= "<tr>";
    $table .= "<td>" . $user['Date'] . "</td>";
    $table .= "<td>" . $user['Day'] . "</td>";
    $table .= "<td>" . $user['Session'] . "</td>";
    $table .= "<td>" . $user['SubjectCode'] . "</td>";
    $table .= "<td>" . $user['SubjectName'] . "</td>";
    $table .= "<td>" . $user['Department'] . "</td>";  
    $table .= "<td>" . $user['Sem'] . "</td>";  
    $table .= "</tr>";
}
$table .= "</table>";

// Send the HTML table as the response
echo nl2br("\n",FALSE);
echo $table;
?>
<style>
    .custom-table {
        border-collapse: collapse;
        width: 100%;
    }

    .custom-table th, .custom-table td {
        border: 2px solid #333;
        padding: 8px;
        text-align: left;
    }

    .custom-table th {
        background-color: #f2f2f2;
    }
</style>
