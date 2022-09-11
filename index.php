<!DOCTYPE html>
<html>

<style>
html {
height: 100%;
}
body {
background-image: linear-gradient(to bottom right, #33475b, #0033CC, #FF77CC, rgb(255, 122, 89));
}
</style>
<h1>12jd</h1>

<?php


$servername = "localhost";
$username = "root";
$password = "123456A.";
$dbname = "sql_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM orders;";

#$sql = "SELECT * FROM orders;"
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "0f frefsults";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "unit_price: " . $row["comments"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<body>

<h1>This is aa heading</h1>
<?php $txt = "PHP";echo "I love $txt!";?>
<?php
$color = "red";
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

echo "My car is " . $color . "<br>";
$x = 5 /* + 15 */ + 5;
echo $x;

?>
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}
myTest2();
echo $y; // outputs 15
?>

<?php
$x1 = 5;
$y1 = 10;

function myTest3() {
  $GLOBALS['y1'] = $GLOBALS['x1'] + $GLOBALS['y1'];
}

myTest3();
echo $y; // outputs 15
?>

<?php
function myTest4() {
  static $x = 0;
  echo $x;
  echo '<br>';
  $x++;
}

myTest4();myTest4();myTest4();
myTest4();
myTest4();
myTest4();
myTest4();
myTest4();
?>

<body>
<iframe src="123.mp3" allow="autoplay" id="audio" ></iframe>
    <audio id="player" autoplay controls>
        <source src="123.mp3" type="audio/mp3">
    </audio>


<div style='width:20%;float:left;margin-left:20%;'> 
        <iframe height='410px' width='100%' src='basic_page/index.html' name='iframe_a'></iframe>
</div> 

<div style='width:30%;float:left;margin-left:5%;'> 
         <iframe height='410px' width='100%' src='tank_animation/index.html' name='iframe_a'></iframe>
 </div> 

 <div class="iframe-container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/X4t0JxiBeO0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" loading="eager" allowfullscreen></iframe>
</div>
</body>



<p>This is a paragraasdfph.<?php
myTest4();
?></p>


</body>






</html>