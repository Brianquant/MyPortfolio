<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 

include "db_connect.inc.php";
$res = mysqli_query($con, "SELECT * FROM personen");

while($dsatz = mysqli_fetch_assoc($res)) {
    echo $dsatz["nachname"] . ", " . $dsatz["vorname"] . "<br>";
}
mysqli_close($con);

?>
</body></html>