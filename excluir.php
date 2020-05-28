<?php

require_once "DB/connect.php";
try {
	
	$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = $id";
$query = mysqli_query($link,$sql);

} catch (Exception $e) {
	
}

if($query===true){
	header('location: listadeusuario.php');
}

?>