<?php
$s1 = " SELECT * from register";

$resultset = mysqli_query($connect, $s1);
$tasks = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
    $tasks[] = $rows;
}
if(isset($_POST["ExportType"]))
{

    switch($_POST["ExportType"])
    {
        case "export-to-excel" :
            // Submission from
            $filename = "phpflow_data_export_".date('Ymd') . ".xls";
            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=\"$filename\"");
            ExportFile($tasks);
            //$_POST["ExportType"] = '';
            exit();
        default :
            die("Unknown action : ".$_POST["action"]);
            break;
    }
}
function ExportFile($records) {
    $heading = false;
    if(!empty($records))
        foreach($records as $row) {
            if(!$heading) {
                // display field/column names as a first row
                echo implode("\t", array_keys($row)) . "\n";
                $heading = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    exit;
}
?>
<meta charset="UTF-8" />
<title>Simple Example of Export Excel file using PHP and MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>phpflow.com : Demo of export to excel file</title>
<div id="container">
    <div class="col-sm-6 pull-left">
        <div class="well well-sm col-sm-12">
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-info">Action</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu" id="export-menu">
                    <li id="export-to-excel"><a href="#">Export to excel</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </div>
        </div>
        <form action="generate_excel.php" method="post" id="export-form">
            <input type="hidden" value="" id="hidden-type" name="ExportType" />
        </form>
        <table id="" class="table table-striped table-bordered">
            <tbody>
            <tr>
                <th>username</th>
                <th>email</th>
                <th>gander</th>
                <th>date_visited</th>
                <th>age</th>

            </tr>
            </tbody>
            <tbody>
            <?php foreach($tasks as $row):?>
                <tr>
                    <td><?php echo $row ['username']?></td>
                    <td><?php echo $row ['email']?></td>
                    <td><?php echo $row ['gander']?></td>
                    <td><?php echo $row ['date_visited']?></td>
                    <td><?php echo $row ['age']?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
