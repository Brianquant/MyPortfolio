<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
</head>
<body class="container">
  
<?php 

$selected_table = $_POST["selected-table"];

// Live Server Mysql connection
$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
// Test Server Mysql connection
// $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

function render_lernfeld($lf, $conn, $selected_table) {
  $query = "SELECT activity FROM $selected_table WHERE lernfeld='$lf'";
  $sql_query = mysqli_query($conn, $query);
  $result = null;
  $result .= "<br><br><span><b>$lf:</b> ";
  while($row = mysqli_fetch_assoc($sql_query)) {
      $result .= $row["activity"] . ", " . "</span>";
  }

  return $result;

}

$lf6 = render_lernfeld('LF06', $conn, $selected_table);  
$lf7 = render_lernfeld('LF07', $conn, $selected_table); 
$lf8 = render_lernfeld('LF08', $conn, $selected_table);
$lf8w = render_lernfeld('LF08W', $conn, $selected_table);
$lf9 = render_lernfeld('LF09', $conn, $selected_table); 
$ol = render_lernfeld('OL', $conn, $selected_table); // Offene Lernstunde
$wpf = render_lernfeld('WPF-LIN-1', $conn, $selected_table); 
$wsk = render_lernfeld('WSK', $conn, $selected_table); 
$en = render_lernfeld('Englisch', $conn, $selected_table); 
$sport = render_lernfeld('Sport', $conn, $selected_table); 

function display_report($lf6, $lf7, $lf8, $lf8w, $lf9,  $ol, $wpf, $wsk, $en, $sport) {

  $result = $lf6 . $lf7 .  $lf8 . $lf8w . $lf9 . $ol . $wpf . $wsk . $en . $sport;

  return $result;

}

// Display Report

echo display_report($lf6, $lf7, $lf8, $lf9,  $ol, $wpf, $wsk, $en, $sport);


 




?>

<div style="margin-top: 20px;">
  <!-- <a href="http://localhost:8080/ToolBox/MyPortfolio/report-tracker-generator/generator/report_form.html">Go to Report Generator</a> -->
  <a href="https://brianstemplats.site/report-tracker-generator/generator/report_form.html">Go to Report Generator</a>
  <a style="color: black;" href="https://brianstemplats.site/report-tracker-generator/tracker/activity_tracker_form.php">Go to tracker</a>
  <!-- <a style="color: black;" target="_blank" href="http://localhost:8080/ToolBox/MyPortfolio/report-tracker-generator/tracker/activity_tracker_form.php">Go to tracker</a> -->
</div>

</body>
</html>