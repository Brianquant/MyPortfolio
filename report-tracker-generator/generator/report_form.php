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

function get_all_table_names($conn) {
    // $query = "SHOW TABLES FROM `work_log_report_db`";
    $query = "SHOW TABLES FROM `u439520744_firma`";
    $result = mysqli_query($conn, $query); // run the query and assign the result to $result
    while($table = mysqli_fetch_array($result)) { // go through each row that was returned in $result
        echo "<option value=\"$table[0]\" >" . $table[0] . "</option>";    // print the table that was returned on that row.
    }
}


?>

<form action="./generate_report.php" method="POST">
    <select name="new_table" id="table">
    <?php get_all_table_names($conn) ?>
    </select>
    <input type="submit" value="Generate Report">
</form>
<a style="color: black;" href="https://brianstemplats.site/report-tracker-generator/tracker/activity_tracker_form.php">Go to tracker</a>
<!-- <a style="color: black;" target="_blank" href="http://localhost:8080/ToolBox/MyPortfolio/report-tracker-generator/tracker/activity_tracker_form.php">Go to tracker</a> -->
<a href="https://brianstemplats.site/report-tracker-generator/generator/report_form.php">Go to Report Generator</a>
<!-- <a href="http://localhost:8080/ToolBox/MyPortfolio/report-tracker-generator/generator/report_form.php">Go to Report Generator</a> -->
</body>
</html>