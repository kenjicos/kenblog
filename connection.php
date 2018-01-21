<?php
$host = "mysql";
$db = "ken_blog";
$username = "root";
$pwd = "1234";

$con = new mysqli($host,$username,$pwd,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>