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
$one = $_POST["patient_id"];
    $two = $_POST["patient_name"];
    $three = $_POST["emergency"];
    $four = $_POST["contact"];
$sql = "INSERT INTO application(applicationno,regno,name,clubid)
VALUES ('$one', '$two', '$three','$four')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>