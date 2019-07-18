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
$two = $_POST["emergency_id"];
$three = $_POST["scene_loc"];
$four = $_POST["bystander"];

$sql = "UPDATE clubs set supervisorid='$two',name='$three',since='$four' where clubid='$one'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo " Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
