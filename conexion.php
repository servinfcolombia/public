<?php 
$mysql_host = "localhost";
$mysql_user = "id4064186_root";
$mysql_pass = "simon2017";
$mysql_db = "id4064186_simon";
$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>

