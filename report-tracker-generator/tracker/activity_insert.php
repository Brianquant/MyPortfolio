
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
    insert_activity_into_table($new_table, $activity, $lernfeld, $conn); 
  } else {
// ToDo: Check for two first chars BS (Table name Validator)
    create_new_table($new_table, $conn, $activity, $lernfeld);
  } 

mysqli_close($conn);




?>
