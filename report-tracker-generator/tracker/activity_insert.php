<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

include "../functions.php";

$activity = $_POST["activity"];
$lernfeld = $_POST["lernfeld"];
$new_table = $_POST["new_table"];

// Live Server Mysql connection
$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
// Test Server Mysql connection
// $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  if(table_exists($new_table, $conn)) {
    insert_activity_into_table($new_table, $activity, $lernfeld, $conn) . "<br>"; 
  } else {
// ToDo: Check for two first chars BS (Table name Validator)
    create_new_table($new_table, $conn, $activity, $lernfeld) . "<br>";
  } 



mysqli_close($conn);


?>

<a href="./activity_tracker_form.php">Tracker</a>
<a href="../generator/report_form.php">Generator</a>
  
</body>
</html>


