<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Tracker</title>
</head>
<body>
<form action="./activity_insert.php" method="post">
    <label for="lernfeld">Lernfeld</label>
    <select name="lernfeld" id="lf">
        <option value="LF06">LF06</option>
        <option value="LF07">LF07</option>
        <option value="LF08">LF08</option>
        <option value="LF09">LF09</option>
        <option value="OL">OL</option>
        <option value="WPF-LIN-1">WPF-LIN-1</option>
        <option value="WSK">WSK</option>
        <option value="LF09">Englisch</option>
        <option value="Sport">Sport</option>
    </select>
    <p>Activity <textarea type="text" name="activity"></textarea></p>
    <p>Neue Table anlegen <input type="text" name="new_table"> 
    <input type="submit" value="Track activity">
</form>
<!-- ToDo: Change link if pushing to live -->
<a href="https://brianstemplats.site/report-tracker-generator/generator/report_form.html">Go to Report Generator</a>
<!-- <a href="http://localhost:8080/ToolBox/MyPortfolio/report-tracker-generator/generator/report_form.html">Go to Report Generator</a> -->
</body>
</html>