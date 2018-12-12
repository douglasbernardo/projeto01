<?php

include '../DB/connect.php';


$sql = "SELECT * FROM usuarios";

$query = mysqli_query($link, $sql);

while($result = mysqli_fetch_array($query)) {
	echo $result[0]." - ".$result[1]." - ".$result[2]."<br>";
}


?>