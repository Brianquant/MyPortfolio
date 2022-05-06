<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Tracker</title>
</head>
<body>
<form action="./activity_insert.php" method="post">
    <p>Lernfeld <input type="text" name="lernfeld"></p>
    <p>Activity <input type="text" name="activity"></p>
    <p>Neue Table anlegen <input type="text" name="new_table"> 
    <input type="submit" value="Track activity">
</form>
<!-- ToDo: Change link if pushing to live -->
<a href="http://localhost:8080/ToolBox/MyPortfolio/report-tracker-generator/generator/report_form.html">Go to Report Generator</a>
</body>
</html>