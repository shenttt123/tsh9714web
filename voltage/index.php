<head>
    <script src="plotly.min.js"></script>
</head>

<p id="p1">hi</p>
<p id="p2">hi</p>
<p id="p3">hi</p>

<body>
    <div id="chart"></div>
    
    <script>
count =0;
setInterval(function(){
    count+=1;
    document.getElementById("p1").innerHTML = count;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
        document.getElementById("p3").innerHTML = this.responseText;
        }
        xhttp.open("GET", "insertv.php", true);
        xhttp.send();
},3000);

        // function get_time_voltage_from_php(){
        // time_voltage = ";
        // var time = time_voltage.split(" ")[0]+" "+time_voltage.split(" ")[1];
        // var voltage = time_voltage.split(" ")[2];
        // return [time,voltage];
        // }

        // function runplot(){
        // temp = get_time_voltage_from_php();
        // Plotly.newPlot("chart",  [{
        //     x:[temp[0]],
        //     y:[temp[1]],
        //     type:'line'
        // }]);
        // count = 0;

        // setInterval(function(){
        //     count +=1;
        //     temp = get_time_voltage_from_php();
        //     document.getElementById("p1").innerHTML = temp[0];
        //     document.getElementById("p2").innerHTML = temp;
        //     document.getElementById("p3").innerHTML = count;
        //     //Plotly.extendTraces('chart',{ x:[[temp[0]]], y:[[temp[1]]]}, [0],100);
        //     },3000);

            
        // }
        // runplot();
    </script>
    
</body>