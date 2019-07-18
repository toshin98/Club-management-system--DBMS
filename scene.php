<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "club management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$one = $_POST["emergency_id"];
    $two = $_POST["patient_id"];
    $three = $_POST["scene_loc"];
    $four = $_POST["bystander"];
$sql = "INSERT INTO clubs (clubid,supervisorid,name,since)
VALUES ('$one', '$two', '$three','$four')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>