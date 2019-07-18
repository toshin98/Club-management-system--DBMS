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

$sql = "SELECT * FROM clubs where clubid='$one'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>club id</th><th>supervisor id</th><th>name</th><th>since</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["clubid"]."</td><td>".$row["supervisorid"]."</td><td>".$row["name"]."</td><td>".$row["since"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 