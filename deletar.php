<?php

if ($queryUpdate)
{
	echo "O usuário foi deletado";
}
else
{
	echo "falha ao deletar:";
	mysql_error();
}

?>