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

?>
<form action="./new_week_insert.php" method="post">
    <label for="week">Create a new week</label>
    <input type="text" name="new_week">
    <input type="submit" value="Create a new week">
</form>
<a href="./activity_tracker_form.php">Tracker</a>
<a href="../tracker/new_week_form.php">New Week</a>
<a href="../generator/report_form.php">Generator</a>
</body>
</html>