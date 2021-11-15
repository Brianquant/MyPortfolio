<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 

$con = mysqli_connect("185.224.138.144", "u439520744_Brian", "1234Test#1234", "u439520744_firma");
var_dump($con);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$res = mysqli_query($con, "SELECT * FROM personen");

while($dsatz = mysqli_fetch_assoc($res)) {
    echo $dsatz["nachname"] . ", " . $dsatz["vorname"] . "<br>";
}
mysqli_close($con);

?>
</body></html>