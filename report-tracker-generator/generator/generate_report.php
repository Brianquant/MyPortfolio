<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
</head>
<body class="container">
  
<?php 

$selected_table = $_POST["selected-table"];

// Live Server Mysql connection
$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
// Test Server Mysql connection
// $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

$query_lf1 = "SELECT activity FROM $selected_table WHERE lernfeld='LF1'";
$result_lf1 = mysqli_query($conn, $query_lf1);


echo "<span><b>LF1:</b> ";
while($row = mysqli_fetch_assoc($result_lf1)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}


$query_lf2 = "SELECT activity FROM $selected_table WHERE lernfeld='LF2'";
$result_lf2 = mysqli_query($conn, $query_lf2);


echo "<br><br><span><b>LF2:</b> ";
while($row = mysqli_fetch_assoc($result_lf2)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}


$query_lf3w = "SELECT activity FROM $selected_table WHERE lernfeld='LF3W'";
$result_lf3w = mysqli_query($conn, $query_lf3w);


echo "<br><br><span><b>LF3W:</b> ";
while($row = mysqli_fetch_assoc($result_lf3w)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}

$query_lf3_tech = "SELECT activity FROM $selected_table WHERE lernfeld='LF3-Tech'";
$result_lf3_tech = mysqli_query($conn, $query_lf3_tech);


echo "<br><br><span><b>LF3-Tech:</b> ";
while($row = mysqli_fetch_assoc($result_lf3_tech)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}

$query_lf4 = "SELECT activity FROM $selected_table WHERE lernfeld='LF4'";
$result_lf4 = mysqli_query($conn, $query_lf4);


echo "<br><br><span><b>LF4:</b> ";
while($row = mysqli_fetch_assoc($result_lf4)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}

$query_lf5 = "SELECT activity FROM $selected_table WHERE lernfeld='LF5'";
$result_lf5 = mysqli_query($conn, $query_lf5);


echo "<br><br><span><b>LF5:</b> ";
while($row = mysqli_fetch_assoc($result_lf5)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}

$query_wsk = "SELECT activity FROM $selected_table WHERE lernfeld='WSK'";
$result_wsk = mysqli_query($conn, $query_wsk);


echo "<br><br><span><b>WSK:</b> ";
while($row = mysqli_fetch_assoc($result_wsk)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}

$query_en = "SELECT activity FROM $selected_table WHERE lernfeld='Englisch'";
$result_en = mysqli_query($conn, $query_en);


echo "<br><br><span><b>Englisch:</b> ";
while($row = mysqli_fetch_assoc($result_en)) {
  // var_dump($row);
    echo $row["activity"] . ", " . "</span>";
}






mysqli_close($conn);

?>



</body>
</html>