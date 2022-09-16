<head>
    <script src="plotly.min.js"></script>
</head>
<body>
    <div id="chart"></div>
    
    <script>
        function getData() {
         return Math.random();
        }

        function getTime(){
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            return time;
        }

        function runplot(){
        totalsec = 60*60*24;
        Plotly.newPlot("chart",  [{
            x:[getTime()],
            y:[getData()],
            type:'line'
        }]);


        setInterval(function(){
            Plotly.extendTraces('chart',{ x:[[getTime()]], y:[[getData()]]}, [0],100000);   
            },10);

        }

        runplot();
    </script>
</body>