<?php
	
	require "DB/connect.php";

	$sql = "SELECT id,nome,idade FROM usuarios ORDER BY nome";
	$query = mysqli_query($link,$sql);

	if($query === true){
		header("location: listadeusuario.php");
	}
?>