 <?php
/*
 $dataX = [];
$dataX = [];
$barcolors = [];

$sql ="SELECT register_id, date_visited
        FROM register
        WHERE register_id != 59
        GROUP BY register_id
";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    $dataX[] = $row['date_visited'];
    $dataY[] = $row['register_id'];
    $barcolors[] = '#f3985d';
}

$dataPoints = array(

            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX ),
            array("y" => 123, "label" => $dataX )

        );




*/
?>
 <!---
<!DOCTYPE HTML>
<!---
 <html>
<head>
    <!---
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js">
    </script>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                    text:"Monthly Registrated Users"
                },
                axisY: {
                    title:"Users",
                    titleFontColor:"#4F81BC",
                    lineColor:"#4F81BC",
                    labelFontColor:"#4F81BC",
                    tickColor:"#4F81BC"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor:"pointer",
                    itemclick: toggleDataSeries
                },
                data: [{
                    type:"column",
                    name:"Purchased",
                    legendText:"Purchased",
                    showInLegend: true,
                    dataPoints:
                      /*  echo json_encode($dataPoints,
                        JSON_NUMERIC_CHECK); */
                },
                    ]

            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) ==="undefined"
                    || e.dataSeries.visible) {
                    e.dataSeries.visible = true;
                }
                else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

        }
    </script>
</head>

<body>


<div id="chartContainer"style="height: 300px; width: 100%;"></div>
</body>
</html>


   --!>
         <?php
            $sql = "SELECT register_id FROM register";

            $result = mysqli_query($connect, $sql);

         ?>
 <html>
 <head>
     <script src = 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js'></script>
 </head>
 <body>
 <div>
     <canvas id="myChart"></canvas>
 </div>

 <script>
     var myChart = document.getElementById('myChart').getContext('2d');

     var barChart = new Chart(myChart,{
         type: 'bar',
         data:{
             labels:['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September','October', 'November','December'],
             datasets:[{
                 label:'Monthly Visitors',
                 data:[
                     <?php
                     $t = array();
                 while($chart = mysqli_fetch_assoc($result))    {

                     $t = "['".$chart['register_id']."']";
                     echo $t;
                 }
                 ?>
                 ]
             }]
         },
     options:{}
     });
 </script>
 </body>
 </html>