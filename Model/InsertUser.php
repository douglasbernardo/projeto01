<?php

include "../DB/connect.php";

// CRUD
// CONNECT
// INSERT (Register)
// UPDATE
// DELETE

$sql = "INSERT INTO usuarios (NOME, SOBRENOME, IDADE) VALUES ('Flávio', 'Augusto', 33)";

$result = mysqli_query($link, $sql);

?>