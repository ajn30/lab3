<?php 
$sname = "localhost";
$uname = "root"; 
$password = "";
$db_name = "ipt101";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 3306);
    if (!$conn) {
        echo "Connection failed!";
    }
?>