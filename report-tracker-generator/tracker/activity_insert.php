
<?php 

include "../functions.php";

$activity = $_POST["activity"];
$lernfeld = $_POST["lernfeld"];
$new_table = $_POST["new_table"];

// Live Server Mysql connection
// $conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
// Test Server Mysql connection
$conn = mysqli_connect("localhost", "root", "", "work_log_report_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


  $my_table_name = "reg_date";
  if(table_exists($table = $my_table_name, $conn)) {
    $sql = "INSERT INTO `$new_table` (activity, lernfeld)
   VALUES ('$activity','$lernfeld')";
    if (mysqli_query($conn, $sql)) {
        echo "Insert Data created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
  } else {
// ToDo: Check for two first chars BS (Table name Validator)
    $sql = "CREATE TABLE `$new_table` (
        `id` INT AUTO_INCREMENT NOT NULL,
        `activity` VARCHAR(126) NOT NULL,
        `lernfeld` VARCHAR(30) NOT NULL,
        `reg_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        primary key (id)
        )";     
        if (mysqli_query($conn, $sql)) {
            echo "Table created successfully";
          } else {
            echo "Error creating table: " . mysqli_error($conn);
          }

    $sql = "INSERT INTO `$new_table` (activity, lernfeld)
    VALUES ('$activity','$lernfeld')";
    if (mysqli_query($conn, $sql)) {
        echo "Insert Data created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
  } 


mysqli_close($conn);




?>
