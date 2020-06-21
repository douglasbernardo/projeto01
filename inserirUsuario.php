<?php
$pdo = require "DB/connect.php";


// Set the variables for the person we want to add to the database
$nome = "Tom holand";
$idade = "76";

$stmt = $pdo->prepare("INSERT INTO usuarios (nome, idade) VALUES (?, ?)");

$stmt->bindParam(1, $nomes);
$stmt->bindParam(2, $idade);
var_dump($stmt->execute());
