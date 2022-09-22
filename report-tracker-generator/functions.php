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
      `activity` VARCHAR(256) NOT NULL,
      `lernfeld` VARCHAR(30) NOT NULL,
      `reg_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      primary key (id)
      )";     
      if (mysqli_query($conn, $sql)) {
          echo "Table created successfully";
        } else {
          echo "Error creating table: " . mysqli_error($conn);
        }

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

  function get_all_table_names($conn) {
    $query = "SHOW TABLES FROM `work_log_report_db`";
    // $query = "SHOW TABLES FROM `u439520744_firma`";
    $result = mysqli_query($conn, $query); // run the query and assign the result to $result
    while($table = mysqli_fetch_array($result)) { // go through each row that was returned in $result
        echo "<option value=\"$table[0]\" >" . $table[0] . "</option>";    // print the table that was returned on that row.
    }
}










?>