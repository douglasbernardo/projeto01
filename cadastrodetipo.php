<?php

	include 'DB/connect.php';
	
 	$sql = "INSERT INTO tipo_usuarios (Tipo) values ('".$_POST['tipo']."')";


	mysqli_query($link, $sql);


?>