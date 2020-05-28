<?php
require "DB/connect.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];; 

if(empty($nome) || empty($idade)){
  echo "<div id='error'>O nome e idade devem ser preenchidos</div>";
  header("Location: cadastrar.php");
  return;
}else{
	$sql = "INSERT INTO usuarios(nome,idade) values ('$nome','$idade')";
	$query = mysqli_query($link,$sql);
}

header("location: listadeusuario.php");