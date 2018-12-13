<?php

include 'DB/connect.php';


 $id = $_GET["id"];

 if (mysql_query("DELETE FROM usuarios where id = 'id' ")){

 	echo "removido";
 }
 else{
 	echo mysql_error();
 }

?>