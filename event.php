<?php
$servername = "localhost";
$username = "adminC2gn4Nh";
$password = "2VxHrSns5Zaa";
$dbname = "srmrubaroo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT enum, etype, name FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Event Number : " . $row["enum"]. " - Event Type : " . $row["etype"]. " - Event Name : " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>