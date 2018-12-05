<?php

include "../DB/connect.php";

$sql = "INSERT INTO usuarios (NOME, SOBRENOME, IDADE) VALUES ('Miguelzido', 'da Silva', 30)";

$query = mysqli_query($link, $sql);

if ($query) {
	echo "Sucesso";
}

?>