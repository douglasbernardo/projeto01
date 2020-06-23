<?php

$pdo = require_once "DB/connect.php";
try {
	
	$id = $_GET['id'];

	$sqlDeletar = "DELETE FROM usuarios WHERE id = :id";
	$stmt = $pdo->prepare($sqlDeletar);
	$stmt->bindValue(':id',$id);

} catch (PDOException $e) {
	echo $e->getMessage();
}

if($stmt->execute()){
	header('location: listadeusuario.php');
}

?>