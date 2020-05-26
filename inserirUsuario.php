<?php

require "DB/connect.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];


$sql = "INSERT INTO usuarios(nome,idade) values ('$nome','$idade')";
$query = mysqli_query($link,$sql);


if($query === true){
	header("location: listadeusuario.php");
}