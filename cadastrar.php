<?php
	include 'DB/connect.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>projeto_01</title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h2><abbr title="Projeto Little">PTL</abbr></h2>
			<div id="menu">
				<a href="index.php" class="btn primary">Home</a>
				<a href="#" class="btn secondary">Cadastre-se</a>
				<a href="listadeusuario.php" class="btn third">Lista de Usuários</a>
				<a href="tiposdeusuario.php" class="btn fouth">Tipos de Usuários</a>
				<a href="sobre.php" class="btn danger">Sobre</a>
			</div>
		</div>
		<div id="content">
			<form method="post" action="listadeusuario.php">
				<table cellspacing="3">
					<!-- CADASTRAR NOMES-->
					<tr>
						<td>
							<label for="NOME">SEU NOME:</label>
						</td>
						<td>
							<input type="text" name="NOME">
						</td>
					</tr>
					<tr>
						<td>
							<label for="SOBRENOME">SOBRENOME:</label>
						</td>
						<td>
							<input type="text" name="SOBRENOME">
						</td>
					</tr>
					<tr>
						<td>
							<label for="IDADE">IDADE:</label>
						</td>
						<td>
							<input type="text" name="IDADE">
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
										echo "<option value=".$row[0].">".$row[1]."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="CADASTRAR">
						</td>
						<td>
							<input type="reset" value="CANCELAR">
						</td>
					</tr>
				</table>
			</form>
		</div>		
	</body>
</html>