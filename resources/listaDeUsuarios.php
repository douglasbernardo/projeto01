<?php
	
	require "DB/connect.php";

	$sql = "SELECT id,nome,idade FROM usuarios";
	$query = mysqli_query($link,$sql);

	if($query === true){
		header("location: listadeusuario.php");
	}
?>