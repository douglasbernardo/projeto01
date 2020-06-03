<?php
require "DB/connect.php";

$nome = filter_input(INPUT_POST,
'nome',
FILTER_SANITIZE_STRING);

$idade = filter_input(INPUT_POST,
'idade',
FILTER_VALIDATE_INT);

if (is_null($nome) || is_null($idade)){
  echo "<div class ='danger'>O nome e idade devem ser preenchidos</div>";
    header('location: /cadastrar.php');
    return;
}else{
  $sql = "INSERT INTO usuarios(nome,idade) values ('$nome','$idade')";
	$query = mysqli_query($link,$sql);
}

header("location: listadeusuario.php");