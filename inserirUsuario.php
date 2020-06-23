<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$pdo = require "DB/connect.php";


// Set the variables for the person we want to add to the database
$Novonome = filter_var($nome, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$Novaidade = filter_var($idade,FILTER_VALIDATE_INT);

$stmt = $pdo->prepare("INSERT INTO usuarios (nome, idade) VALUES (:nome, :idade)");

$stmt->bindValue(':nome', $Novonome);
$stmt->bindValue(':idade', $Novaidade);

if($stmt->execute()){
    header("Location: listadeusuario.php");
}else{
    return;
}
