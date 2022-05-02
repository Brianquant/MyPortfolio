<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 

$conn = mysqli_connect("localhost", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
var_dump($con);

$activity = $_POST["activity"];
$lernfeld = $_POST["lernfeld"];

// Create connection
// Study $conn = mysqli_connect("localhost", "root", "", "work_log_report_db");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function table_exists($table) {
    global $conn;
    $table = $conn->real_escape_string($table);
    $sql = "SHOW TABLES LIKE '$table' ";
    $result = $conn->query($sql);
    $num = 0;
    $num = mysqli_num_rows($result);
    if($num > 0) {
        return true;
    }
    return false;
  }
  
  // usage
  $my_table_name = "reg_date";
  if(table_exists($table = $my_table_name)) {

    $sql = "INSERT INTO `BS` (activity, lernfeld)
   VALUES ('$activity','$lernfeld')";
    if (mysqli_query($conn, $sql)) {
        echo "Insert Data created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
  } else {;

    $sql = "CREATE TABLE `BS` (
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

    $sql = "INSERT INTO `BS` (activity, lernfeld)
    VALUES ('$activity','$lernfeld')";
    if (mysqli_query($conn, $sql)) {
        echo "Insert Data created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
  } 


mysqli_close($conn);


?>
</body></html>