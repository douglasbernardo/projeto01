<?php

	include 'DB/connect.php';

	$sql = "INSERT INTO usuarios (NOME, SOBRENOME, IDADE) VALUES ('".$_POST["NOME"]."', '".$_POST["SOBRENOME"]."', ".$_POST["IDADE"].")";

	mysqli_query($link, $sql);


?>