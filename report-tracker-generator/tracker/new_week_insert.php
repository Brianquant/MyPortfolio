<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new week</title>
</head>
<body>


<?php 

include "../functions.php";
// $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");
$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
$new_week = $_POST["new_week"];
create_new_table($new_week, $conn);

?>

<a href="./activity_tracker_form.php">Tracker</a>
<a href="../tracker/new_week_form.php">New Week</a>
<a href="../generator/report_form.php">Generator</a>
</body>