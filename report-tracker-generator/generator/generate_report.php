<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
  <script type="text/javascript" src="./generator.js" defer></script>
</head>
<body class="container">
  
<?php 

$selected_table = $_POST["selected-table"];

// Live Server Mysql connection
// $conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
// Test Server Mysql connection
$conn = mysqli_connect("localhost", "root", "", "work_log_report_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

$sql = "SELECT activity, lernfeld, reg_date FROM $selected_table";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<p class='dataset'>". "<span class='lf'>" . $row["lernfeld"] . ": " . "</span>" . $row["activity"] . "</p>";
  }

mysqli_close($conn);

?>

<!-- <button>Format Report</button> -->

</body>
</html>