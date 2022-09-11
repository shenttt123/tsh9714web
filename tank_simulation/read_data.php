<?php
$servername = "localhost";
$username = "root";
$password = "st4895prescC.";
$dbname = "sql_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orders;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "comments: " . $row["comments"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<?php
error_reporting(-1);
date_default_timezone_set("Asia/Kolkata");

$widget=@$_GET["widget"];

if($widget=="info"){
	$currentTime = time();
	
	$hr_min=date('H:i', $currentTime);
	$second= date('s', $currentTime);
	
	echo"<div>
	        Server Time: $hr_min:<b style='color:brown'>$second</b>
		</div>
	";
}

if($widget=="tank_animation"){
	$currentTime = time();
    $second= date('s', $currentTime);
    $str="&value=".$second;
    echo"$str";
}


?>