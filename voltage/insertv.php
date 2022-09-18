<?php
$servername = "localhost";
$username = "root";
$password = "123456A.";
$dbname = "tsh9714web";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else if(isset($_GET["voltage"])){
$voltage = $_GET["voltage"];
$sql = "INSERT INTO `battery_voltage`(`voltage`) values($voltage);";
$result = $conn->query($sql);
if ($result == TRUE) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . " => " . $connection->error;
 }
}

$servername = "localhost";
$username = "root";
$password = "123456A.";
$dbname = "tsh9714web";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select time, voltage from battery_voltage ORDER BY `id` DESC limit 1;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo $row["time"]. " ".$row["voltage"]. " ";
}
$conn->close();


?>