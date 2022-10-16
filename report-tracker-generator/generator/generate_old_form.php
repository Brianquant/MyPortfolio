<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Form Generator</title>
</head>
<body>

<?php

include "../functions.php";
// $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");
$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");

?>

<form action="./generate_old_report.php" method="POST">
    <select name="selected-table" id="table">
    <?php get_all_table_names($conn) ?>
    </select>
    <input type="submit" value="Generate Report">
</form>
<a href="../tracker/activity_tracker_form.php">Tracker</a>
<a href="../tracker/new_week_form.php">New Week</a>
<a href="../generator/report_form.php">Generator</a>
<a href="../generator/generate_old_form.php">Old Generator</a>
</body>
</html>