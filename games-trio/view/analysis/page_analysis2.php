<?php

$sql5 = "SELECT date_visited, visit_count FROM register ORDER BY date_visited";

$result5 = mysqli_query($connect, $sql5);

$dateArray2 = array();

$isAdmin = true;

while($row = mysqli_fetch_assoc($result5)){
    if(!$isAdmin){
        $month = substr($row["date_visited"], 5, 2) ;
        $year = substr($row["date_visited"], 0, 4) ;
        $yearMonth = $year . "." . $month;
        $isPresent = false;

        foreach ($dateArray2 as $date => $count){
            if($date == $yearMonth){
                $isPresent = true;
                $totalCount = $count + $row['visit_count'];
                $dateArray2[$date] = $totalCount;
            }
        }
        if(!$isPresent) {
            $dateArray2[$yearMonth] = $row['visit_count'];
        }
    }else{
        $isAdmin = false;
    }
}
$path2 = "./public/js/monthlyVisitors.json";
$jsonArr = json_encode($dateArray2, JSON_PRETTY_PRINT);

$ff = fopen($path2, 'w');
fwrite($ff, $jsonArr);
fclose($ff);
?>
