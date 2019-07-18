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

$sql = "delete FROM application where applicationno='$one'";
$result = mysqli_query($conn, $sql);

echo "table deleted";
$conn->close();
?> 