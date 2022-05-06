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





?>