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
$two = $_POST["hospital_name"];
$three = $_POST["doc_on_duty"];

$sql = "UPDATE student set name='$two',department='$three' where regno='$one'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
