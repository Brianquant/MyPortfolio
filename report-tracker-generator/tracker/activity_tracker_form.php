<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Tracker</title>
    <link rel="stylesheet" href="/report-tracker-generator/css/style.css">
    <link rel="stylesheet" href="/report-tracker-generator/css/normalize.css">
</head>
<body>

<?php

include "../functions.php";
// $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");
$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");

?>
<nav>
    <ul>
        <li><a href="./activity_tracker_form.php">Tracker</a></li>
        <li><a href="../tracker/new_week_form.php">New Week</a></li>
        <li><a href="../generator/report_form.php">Generator</a></li>
    </ul>
</nav>
<main class="tracker-section">
    <form class="form-tracker" action="./activity_insert.php" method="post">
        <div class="form-set">
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
                <option value="Englisch">Englisch</option>
                <option value="Sport">Sport</option>
            </select>
        </div>
        <div class="form-set">
            <label for="activity" class="activity">Activität</label>
            <textarea rows="5" columns="5" type="text" name="activity"></textarea>
        </div>
        <div class="form-set">
            <label for="table">Schulwoche</label>
            <select name="new_table" id="table">
                <?php get_all_table_names($conn) ?>
            </select>
        </div>
        <button type="submit">Track activity</button>
    </form>
</main>
</body>
</html>