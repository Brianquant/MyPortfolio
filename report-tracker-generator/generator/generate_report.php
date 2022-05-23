<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
  <!-- <script type="text/javascript" src="./generator.js" defer></script> -->
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

$sql1 = "SELECT lernfeld FROM $selected_table";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT activity FROM $selected_table";
$result2 = mysqli_query($conn, $sql2);

while($row1 = mysqli_fetch_assoc($result1) && $row2 = mysqli_fetch_assoc($result2)) {
    echo "<p class='dataset'>". "<span class='lf'>" . $row1["lernfeld"] ?? 'default value' . ": " . "</span>" . $row2["activity"] . ", " . "</p>";
  }


mysqli_close($conn);

?>



</body>
</html>