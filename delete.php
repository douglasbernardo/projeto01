<?php

include 'DB/connect.php';

	$queryUpdate = false;

	
	if(!empty($_GET["action"]) && $_GET["action"] == "deletar") {
		// fazer update dos dados utilizando o id (where)
		$sql = "DELETE FROM usuarios WHERE ID = ".$_POST['id'];
		$queryUpdate = mysqli_query($link, $sql);
		

		$sql = "SELECT * FROM usuarios WHERE id = ".$_POST['id']."";

		$dados = mysqli_query($link, $sql);

		$id;
		$nome;
		$sobrenome;
		$idade; 
		$tipo;

	 	while ($usuarios = mysqli_fetch_array($dados))
	 	{
		 	$id = $usuarios[0];
		 	$nome = $usuarios[1];
			$sobrenome = $usuarios[2];
			$idade = $usuarios[3];
			$tipo = $usuarios[4];
	 	}
	}
	else
	{

		$sql = "SELECT * FROM usuarios WHERE id = ".$_GET['id']."";

		$dados = mysqli_query($link, $sql);

		$id;
		$nome;
		$sobrenome;
		$idade; 
		$tipo;

	 	while ($usuarios = mysqli_fetch_array($dados))
	 	{	 		
		 	$id = $usuarios[0];
		 	$nome = $usuarios[1];
			$sobrenome = $usuarios[2];
			$idade = $usuarios[3];
			$tipo = $usuarios[4];
	 	}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>DELETAR</title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link href="https://fonts.googleapis.com/css?family=Kanit|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h2><abbr title="Projeto Little">PTL</abbr></h2>
			<div id="menu">
				<a href="index.php" class="btn primary">Home</a>
				<a href="cadastrar.php" class="btn secondary">Cadastre-se</a>
				<a href="listadeusuario.php" class="btn third">Lista de Usuários</a>
				<a href="tiposdeusuario.php" class="btn fourth">Tipos de Usuários</a>
				<a href="sobre.php" class="btn danger">Sobre</a>
			</div>
		</div>
		<h2>Exclusão de registros</h2>
		<form method="post" action="?action=deletar">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
				<table cellspacing="3">
					<!-- ALTERAÇÃO DOS NOMES-->
					<tr>
						<td>
							<label for="NOME">SEU NOME:</label>
						</td>
						<td>
							<input type="text" name="nome" value="<?php echo $nome; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="SOBRENOME">SOBRENOME:</label>
						</td>
						<td>
							<input type="text" name="sobrenome" value="<?php echo $sobrenome; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label for="IDADE">IDADE:</label>
						</td>
						<td>
							<input type="text" name="idade" value="<?php echo $idade; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>TIPO:</label>
						</td>
						<td>
							<select name="tipos">;
								<?php
									// Trazer do banco de dados todos os tipos disponíveis
									$sql = "SELECT * FROM tipo_usuarios";
									$query = mysqli_query($link, $sql);
									while ($row = mysqli_fetch_array($query)) {
										if($row[0] == $tipo) {
											echo "<option selected value=".$row[0].">".$row[1]."</option>";	
										}
										else {
											echo "<option value=".$row[0].">".$row[1]."</option>";
										}
										
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan=2 align= right>
							<input type="submit" value="deletar">
							<input type="reset" value="cancelar">
						</td>
					</tr>
			</table>
			<div id="footer">

			</div>
		</form>
	</body>
</html>
