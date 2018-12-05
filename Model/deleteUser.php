<?php

include '../DB/connect.php';

$sql = "DELETE FROM usuarios where ID = 25";

$query = mysqli_query($link, $sql);

?>