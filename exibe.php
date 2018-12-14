<?php
	include 'DB/connect.php';

	$sql = "SELECT * FROM usuarios WHERE id = ".$_GET['id']."";

	$dados = mysqli_query($link, $sql);

	$id;
	$nome;
	$sobrenome;
	$idade; 

 	while ($usuarios = mysqli_fetch_array($dados))
 	{
 		
	 	$id = $usuarios[0];
	 	$nome = $usuarios[1];
		$sobrenome = $usuarios[2];
		$idade = $usuarios[3];
 	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" action="listadeusuario.php">
				<table cellspacing="3">
					<!-- CADASTRAR NOMES-->
					<tr>
						<td>
							<label for="NOME">SEU NOME:</label>
						</td>
						<td>
							<input type="text" name="NOME"  value="<?php echo $nome; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="SOBRENOME">SOBRENOME:</label>
						</td>
						<td>
							<input type="text" name="SOBRENOME" value="<?php echo $sobrenome; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="IDADE">IDADE:</label>
						</td>
						<td>
							<input type="text" name="IDADE" value="<?php echo $idade; ?>">
						</td>
					</tr>
					<tr>
						<td colspan=2 align= right>
							<input type="reset" value="alterar">
							<input type="submit" value="cancelar">
						</td>
					</tr>
			</table>
		</form>
	</body>
</html>