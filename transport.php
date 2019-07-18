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
$one = $_POST["ambulance_id"];
    $two = $_POST["driver_name"];
$three = $_POST["provider"];
$four = $_POST["patient_id"];

$sql = "INSERT INTO members(memberid,name,department,clubid)
VALUES ('$one', '$two','$three','$four')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>