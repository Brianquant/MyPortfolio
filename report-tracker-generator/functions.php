<?php 
// function check if table exist
function table_exists($table, $conn) {
    $table = mysqli_real_escape_string($conn, $table);
    $sql = "SHOW TABLES LIKE '$table' ";
    $result = mysqli_query($conn, $sql);
    $num = 0;
    $num = mysqli_num_rows($result);
    if($num > 0) {
        return true;
    }
    return false;
  }


  function create_new_table($new_table, $conn, $activity, $lernfeld) {
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

//   $sql = "INSERT INTO `$new_table` (activity, lernfeld)
//   VALUES ('$activity','$lernfeld')";
//   if (mysqli_query($conn, $sql)) {
//       echo "Insert Data created successfully";
//   } else {
//       echo "Error creating table: " . mysqli_error($conn);
//   }

}


  function insert_activity_into_table($new_table, $activity, $lernfeld, $conn) {
    $sql = "INSERT INTO `$new_table` (activity, lernfeld)
     VALUES ('$activity','$lernfeld')";
      if (mysqli_query($conn, $sql)) {
          echo "Insert Data created successfully";
      } else {
          echo "Error creating table: " . mysqli_error($conn);
      }
  }










?>