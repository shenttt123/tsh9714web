<head>
    <script src="plotly.min.js"></script>
</head>
<body>
<div id="chart"></div>
<script>
var time_voltage = "";
function gethtmlresponse(){
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "insertv.php", true);
    xhttp.send();
    xhttp.onload = function() {
    time_voltage = this.responseText;
        }
    return time_voltage;
        
}

function get_time_voltage_from_php(){
    arr = gethtmlresponse().split(" ");
    time =[];
    voltage=[];
    for (var i = 0; i < arr.length-1; i++){
        if (i%3==0 ){
            time.push(arr[i]+" "+arr[i+1]);
        }
        else if (i%3==2){
            voltage.push(arr[i]);
        }
    }
    return [time,voltage];
    }

function runplot(){
    var layout = {
  title: {
    text:'Solor panel voltage',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'Time',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'Live voltage on Solor panel',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
    intervel = 0;
    setInterval(function(){
    temp = get_time_voltage_from_php();
    intervel=60000;
    Plotly.newPlot("chart",  [{
        x:temp[0],
        y:temp[1],
        type:'line'
           }],layout); 
           },intervel)            
           }

runplot();
</script>
</body>