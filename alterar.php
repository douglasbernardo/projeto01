<?php

include 'DB/connect.php';

  	echo "<td>$id ";
 	echo "<A href=listadeusuario.php?acao=editar&buscaid=$id>";
 	echo "(ALTERAR)</a></td>";

 	if($_REQUEST['acao'] == "alterar"){

 		$slq = "SELECT * FROM usuarios where id = $buscacodigo";
 		$result = mysql_query($sql);
 	

 	if ($usuarios = mysql_fetch_array($result)){

 		$id = $usuarios["id"];
 		$nome = $usuarios["NOME"];
 		$sobrenome = $usuarios["SOBRENOME"];
 		$idade = $usuarios["IDADE"];
 		
 	}
 	else{

 		echo "registro não encontrado";}	
 	}
?>
<?php


if ($_REQUEST["acao"] == "editar"){
	$acaoform = "$alterar";
}
else {
	$acaoform = "adicionar";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" action="listadeusuario.php?A">
				<table cellspacing="3">
					<!-- CADASTRAR NOMES-->
					<tr>
						<td>
							<label for="NOME">SEU NOME:</label>
						</td>
						<td>
							<input type="text" name="NOME"  value="<? echo $NOME; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="SOBRENOME">SOBRENOME:</label>
						</td>
						<td>
							<input type="text" name="SOBRENOME" value="<? echo $SOBRENOME; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="IDADE">IDADE:</label>
						</td>
						<td>
							<input type="text" name="IDADE" value="<? echo $IDADE; ?>">
						</td>
					</tr>
			</table>
		</form>
	</body>
</html>