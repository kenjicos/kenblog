<?php
include "connection.php";

$sql = "SELECT * FROM articles";
$result = $con->query($sql);

while($rows = $result->fetch_assoc()){
    echo $rows['id']." ".$rows['title']." ".$rows['content']."<br>";
}

?>