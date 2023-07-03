<?php
// Bar Chart with days
   $sql = "SELECT date_visited, SUM(visit_count) as 'visit_count' FROM register WHERE register_id != 59 GROUP BY date_visited ORDER BY date_visited";
    $result = mysqli_query($connect, $sql);

    $dateArray = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $day = substr($row["date_visited"], 8, 2);
        $month = substr($row["date_visited"], 5, 2);
        $year = substr($row["date_visited"], 0, 4);

        $new = $day . "." . $month . "." . $year;
        $dateArray[$new] = $row['visit_count'];

    }

$path = "./public/js/visitors.json";
$jArray = json_encode($dateArray, JSON_PRETTY_PRINT);

$f = fopen($path, 'w');
fwrite($f, $jArray);
fclose($f);

// PIE CHART

$sql2 = "SELECT gender, SUM(age) as age FROM register GROUP BY gender";

$result2 = mysqli_query($connect, $sql2);

$arr = array();
    $sql3 = "SELECT SUM(gender) as g, SUM(age) as age FROM register WHERE gender = 'F'";
    $register = mysqli_fetch_assoc(mysqli_query($connect, $sql3));
    $averageF = $register['age'] / ($register['g'] / 2 );
    $arr['F'] = round($averageF);


    $sql3 = "SELECT SUM(gender) as g, SUM(age) as age FROM register WHERE gender = 'M'";
    $register = mysqli_fetch_assoc(mysqli_query($connect, $sql3));
    $averageM = $register['age'] / $register['g'];
    $arr['M'] = round($averageM);


$path = "./public/js/pie.json";
$jsonAr = json_encode($arr);

$fp = fopen($path, 'w');
fwrite($fp, $jsonAr);
fclose($fp);
?>

<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./public/js/barChart.js"></script>
    <script src="./public/js/barChart2.js"></script>
    <script src="./public/js/pieChart.js"></script>
</head>
<body>
<div>
    <input type="date" id="start_date" name="start_date"  min="2021-11-25" max="2025-12-31" value="2021-11-01" onchange="filterData()">
    <input type="date" id="end_date" name="end_date" min="2021-11-25" max="2025-12-31" value="2021-11-01" onchange="filterData()">
    <canvas id="myChart"></canvas>
</div>
<div>


    <canvas id="myChart2"></canvas>
</div>
<canvas id="pieChart"></canvas>
</body>
</html>
