<head>
    <script src="plotly.min.js"></script>
</head>

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
}

function get_time_voltage(){
global $conn;
$sql = "select time, voltage from battery_voltage ORDER BY `id` DESC limit 1;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo $row["time"]. " ".$row["voltage"];
}
}
get_time_voltage();
?>

<p id="p1">hi</p>
<p id="p2">hi</p>

<body>
    <div id="chart"></div>
    
    <script>
        function get_time_voltage_from_php(){
        time_voltage = "<?php get_time_voltage()?>";
        var time = time_voltage.split(" ")[0]+" "+time_voltage.split(" ")[1];
        var voltage = time_voltage.split(" ")[2];
        return [time,voltage];
        }

        function runplot(){
        temp = get_time_voltage_from_php();
        Plotly.newPlot("chart",  [{
            x:[temp[0]],
            y:[temp[1]],
            type:'line'
        }]);

        setInterval(function(){
            temp = get_time_voltage_from_php();
            document.getElementById("p1").innerHTML = temp[0];
            document.getElementById("p2").innerHTML = temp[1];
            Plotly.extendTraces('chart',{ x:[[temp[0]]], y:[[temp[1]]]}, [0],10);
            },1000);

            
        }


        runplot();
    </script>
    
</body>