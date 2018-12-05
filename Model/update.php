<?php

include '../DB/connect.php';

$sql = "UPDATE usuarios SET NOME = 'Marcos' where ID = 27";

$query = mysqli_query($link, $sql);

?>