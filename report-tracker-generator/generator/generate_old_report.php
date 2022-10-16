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

$lf1 = render_lernfeld('LF1', $conn, $selected_table);  
$lf2 = render_lernfeld('LF2', $conn, $selected_table); 
$lf3_tech = render_lernfeld('LF3-Tech', $conn, $selected_table);
$lf3_w = render_lernfeld('LF3W', $conn, $selected_table);
$lf4 = render_lernfeld('LF4', $conn, $selected_table); 
$lf5 = render_lernfeld('LF5', $conn, $selected_table); 
$wsk = render_lernfeld('WSK', $conn, $selected_table); 
$en = render_lernfeld('Englisch', $conn, $selected_table); 
$sport = render_lernfeld('Sport', $conn, $selected_table); 

function display_report($lf1, $lf2, $lf3_tech, $lf3_w, $lf4,  $lf5, $wsk, $en, $sport) {

  $result = $lf1 . $lf2 . $lf3_tech . $lf3_w . $lf4 . $lf5 . $wsk . $en . $sport;

  return $result;

}

// Display Report

echo display_report($lf1, $lf2, $lf3_tech, $lf3_w, $lf4,  $lf5, $wsk, $en, $sport);


 


?>

<div style="margin-top: 20px;">
<a href="../tracker/activity_tracker_form.php">Tracker</a>
<a href="../tracker/new_week_form.php">New Week</a>
<a href="../generator/report_form.php">Generator</a>
</div>

</body>
</html>