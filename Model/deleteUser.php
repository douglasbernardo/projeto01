<?php

include '../DB/connect.php';

$sql = "DELETE FROM tipo_usuarios where ID = 15";

$query = mysqli_query($link, $sql);

if($query){
	echo "sucesso";
}
?>