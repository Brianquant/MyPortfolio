<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Tracker</title>
</head>
<body>

<?php

include "../functions.php";
// $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");
$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");

?>
<form action="./activity_insert.php" method="post">
    <label for="lernfeld">Lernfeld</label>
    <select name="lernfeld" id="lf">
        <option value="LF06">LF06</option>
        <option value="LF07">LF07</option>
        <option value="LF08">LF08</option>
        <option value="LF08W">LF08W</option>
        <option value="LF09">LF09</option>
        <option value="OL">OL</option>
        <option value="WPF-LIN-1">WPF-LIN-1</option>
        <option value="WSK">WSK</option>
        <option value="LF09">Englisch</option>
        <option value="Sport">Sport</option>
    </select>
    <p>Activity <textarea type="text" name="activity"></textarea></p>
    <label for="table">Neue Table anlegen</label>
    <select name="new_table" id="table">
    <?php get_all_table_names($conn) ?>
    </select>
    <input type="submit" value="Track activity">
</form>
<a href="./activity_tracker_form.php">Tracker</a>
<a href="../tracker/new_week_form.php">New Week</a>
<a href="../generator/report_form.php">Generator</a>
</body>
</html>