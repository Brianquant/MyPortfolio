<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 

$con = mysqli_connect("brianstemplats.site/mysql_test", "u439520744_Brian", 'P9"JG9SAT<u+', "u439520744_firma");
var_dump($con);
$res = mysqli_query($con, "SELECT * FROM personen");

while($dsatz = mysqli_fetch_assoc($res)) {
    echo $dsatz["nachname"] . ", " . $dsatz["vorname"] . "<br>";
}
mysqli_close($con);

?>
</body></html>