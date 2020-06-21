<?php

$pdo = require_once "DB/connect.php";
try {
	
	$id = $_GET['id'];

	$sqlDeletar = "DELETE FROM usuarios WHERE id = :id";
	$stmt = $pdo->prepare($sqlDeletar);
	$stmt->bindValue(':id',$id);
	$stmt->execute();

} catch (PDOException $e) {
	echo $e->getMessage();
}

	header('location: listadeusuario.php');

?>