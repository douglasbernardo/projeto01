<?php

include '../DB/connect.php';

$sql = "DELETE FROM usuarios where ID = 28";

$query = mysqli_query($link, $sql);

if($query){
	echo "sucesso";
}
?>